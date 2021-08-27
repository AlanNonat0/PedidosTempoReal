<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KitchenController extends Controller
{
    public function index(Request $request)
    {
        echo json_encode('{status:200 data:[msg:ok]}');
        return view('app.kitchen.index');
    }
}
