<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::orderByDesc('sales')->limit(8)->get();
        return view('app.order.index', ['products' => $products]);
    }

    /**
     * Cria um novo pedido com base nos parametros passados
     *
     * @param [array] $data - Values client_name, Note, payment, amount, status
     * @return Order
     */
    public static function createOrder(array $data)
    {
        $orderOpen = new Order($data);
        $orderOpen->save();
        return $orderOpen;
    }

    public static function cancelOrder()
    {

    }

    /**
     * Insere produtos na tabela order_products relacionando-os ao pedido vigente
     * e soma a quantidade de produtos vendidos na tabela products.
     * @return Order 
     */
    public static function checkoutOrder($order, $products)
    {

        foreach ($products as $product) {
            $order->products()->attach([
                $product['id'] => ['quantity' => $product['qtt']]  
            ]);

            $productObj = Product::find($product['id']);
            $productObj->sales += $product['qtt'];
            $productObj->save();
        }

        return $order;
    }

}
