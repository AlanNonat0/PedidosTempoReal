<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class KitchenController extends Controller
{
    public function index(Request $request)
    {
        $orderObj = new Product();

        $orders = OrderController::getPreparation(4);
        return view('app.kitchen.index', ['orders' => $orders]);
    }

    /**
     * Marca o pedido como pronto
     *
     * @param [int] $id - Id do pedido a ser marcado
     * @return void
     */
    public function orderReady(Request $request){
        $orderId = $request->orderId;

        if(OrderController::kitchenOrderReady($orderId)){
            return response()->json([
                'success' => true,
                'message' => 'Order Complete'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Error on Complete'
        ]);
        
    }
}
