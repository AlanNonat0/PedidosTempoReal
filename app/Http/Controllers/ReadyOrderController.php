<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadyOrderController extends Controller
{
    /**
     * Renderiza a view do painel de saída
     */
    public function index(){
        $orders = OrderController::getPreparation(6);
        $ordersReady = OrderController::getOrderReady(4);
        return view('app.ready_order.index', ['orders' => $orders, 'ordersReady' => $ordersReady]);
    }
}
