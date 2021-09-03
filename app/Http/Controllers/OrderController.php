<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Status;
use App\Models\Product;

class OrderController extends Controller
{

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

    /**
     * Marca um pedido como pronto
     *
     * @param int $id  Id do pedido a ser marcado
     * @return boolean
     */
    public static function kitchenOrderReady($id){
        $status = Status::where('status', 'Concluido')->get();
        $status->toArray();
        $idStatus = $status[0]["id"];
        $order = Order::find($id);
        $order->status = $idStatus;
        if($order->save()){
            return true;
        }
        return false;
    }

    /**
     * Retorna uma coleçao com os pedidos que estão em preparo
     *
     * @param int $limit - Número limite de pedidos a serem buscados
     * @return array
     */
    public static function getPreparation($limit){
        $orders = Order::with(['products'])->where('status', 2)->orderBy('updated_at')->limit($limit)->get();
        return $orders;
    }

}
