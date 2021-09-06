<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;


class OrderProductsController extends Controller
{
    /**
     * Adiciona os produtos no pedido
     *
     * @return json
     */
    public function addProductsToOrder(Request $request ,$id) {


        $product = Product::find($id);



        if (empty($product)) {
            $addProduct['success'] = false;
            $addProduct['message'] = 'Nenhum dado encontrado';
            return  json_encode($addProduct);

        } else {
            $addProduct['success'] = true;
            $addProduct['message'] = 'Sucesso';
            $addProduct['data'] = $product;

            return json_encode($addProduct);

        }

    }
}
