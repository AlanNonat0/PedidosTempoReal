<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KitchenController extends Controller
{
    public function index(Request $request)
    {
        
        return view('app.kitchen.index');
    }
}
