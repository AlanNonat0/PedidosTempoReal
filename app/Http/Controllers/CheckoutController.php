<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function index()
    {
        /**@var $order Guarda a chave do ultimo pedido registrado e identifica o pedido atual */
        $order = isset(Order::all()->last()->id) ? Order::all()->last()->id + 1 : 1;

        /**@var $payments  Collection com as formas de pagamento */
        $payments = Payment::all();

        /**@var $products Collection com os pedidos mais vendidos em ordem decrescente*/
        $products = ProductController::bestSellers(8);

        return view('app.order.index',
            ['products' => $products, 'order' => $order, 'payments' => $payments]);
    }

    public function endOrder(Request $request)
    {

        if (isset($request->products)) {

            // Validações
            $rule = [
                'payment' => 'exists:payments,id',
            ];
            $feedback = [
                'payment.exists' => 'Forma de pagamento não cadastrada',
            ];
            $request->validate($rule, $feedback);

            $products = $request->products[0];
            $total = 0;

            // Calcula o valor total com base no banco de dados para evitar erros ou fraudes no frontend
            foreach ($products as $product) {

                $item = Product::find($product['id']);
                $total += $item->price * $product['qtt'];
            }

            $order = [
                'payment' => $request->payment,
                'amount' => $total,
                'status' => 2,
            ];

            // checa se enviaram um nome e uma observação para o pedido
            isset($request->name) && !empty($request->name) ? $order['client_name'] = $request->name : null;
            isset($request->note) && !empty($request->note) ? $order['Note'] = $request->note : null;

            // Registra o novo pedido e o relaciona com os produtos
            $orderOpen = OrderController::createOrder($order);
            $orderProducts = OrderController::checkoutOrder($orderOpen, $products);

            // Feedbacks
            if ($orderOpen && $orderProducts) {

                if (isset($request->cash)) {

                    $moneyReturned = $request->cash - $total;
                    return response()->json([
                        'success' => true,
                        'message' => 'money returned',
                        'data' => ['money_returned' => $moneyReturned],
                    ]);

                } else {
                    return response()->json([
                        'success' => true,
                        'message' => 'Order open',
                        'data' => $orderProducts,
                    ]);
                }
                
            } else {

                return response()->json([
                    'success' => false,
                    'message' => 'error',
                ]);
            }

        } else {
            return response()->json([
                'success' => false,
                'message' => 'Empty list',
            ]);
        }

    }
}
