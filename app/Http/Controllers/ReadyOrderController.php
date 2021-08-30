<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadyOrderController extends Controller
{
    public function index(){
        return view('app.ready_order.index');
    }
}
