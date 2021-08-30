<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

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

    public static function createOrder(){
        session_start();
        $_SESSION['order'] =

            ['client_name' => 'Nao identificado',
             'Note' => '',
             'payment' => 1,
             'amount' => 0.00,
             'status' => 1,
             'products' => []
            ]
        ;
    }

    public static function cancelOrder(){
        session_start();
        
        $id = $_SESSION['order']->id;
        Order::find($id)->delete();
        
        session_destroy();
    }

    public static function chekoutOrder(){
        session_start();
        
        $id = $_SESSION['order']->id;
        Order::find($id);
        
        //...
    }

}
