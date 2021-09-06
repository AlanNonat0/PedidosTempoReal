<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Events\SendOrderReady;
use Illuminate\Support\Facades\Event;

class KitchenController extends Controller
{
    public function index(Request $request)
    {

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
        $orderReady = OrderController::kitchenOrderReady($orderId);
        $dataResponse = [];

        if($orderReady){
            
            $dataResponse['success'] = true;
            $dataResponse['message'] = 'Order Complete';
            
        } else {
            $dataResponse['success'] = false;
            $dataResponse['message'] = 'Error on Complete';
        }

        Event::dispatch(new SendOrderReady(isset($orderReady)?true:false));
        return response()->json($dataResponse);
        
    }
}
