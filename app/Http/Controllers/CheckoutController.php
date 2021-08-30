<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    public function index(){
        OrderController::createOrder();

        $products = Product::orderByDesc('sales')->limit(8)->get();
        return view('app.order.index', ['products' => $products]);
    }

    public function endOrder(Request $request){
        dd($request);
    }
}
