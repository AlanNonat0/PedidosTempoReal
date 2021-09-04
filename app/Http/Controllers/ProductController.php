<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Retorna os produtos mais vendidos
     * @param int $limit - Quantidade de produtos a ser carregado
     * @return array Product - Retorna uma collection com os produtos mais vendidos
     */
    public static function bestSellers($limit)
    {
        $products = Product::orderByDesc('sales')->limit($limit)->get();
        return $products;
    }

}
