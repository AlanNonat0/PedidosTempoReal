<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Search - Busca produtos por codigo ou termo digitado
     *
     *@return json
     */
    public function search(Request $request)
    {

        if (!isset($request->inputChkSearch) || !empty($request->inputChkSearch)) {

            $products = Product::where('name', 'LIKE', '%' . $request->inputChkSearch . '%')
                ->orWhere('id', 'LIKE', '%' . $request->inputChkSearch . '%')
                ->limit(8)
                ->get();

            if ($products == [] || count($products) <= 0) {
                $search['success'] = false;
                $search['message'] = 'Nenhum dado encontrado';
                return json_encode($search);

            } else {
                $search['success'] = true;
                $search['message'] = 'Sucesso';
                $search['data'] = $products;

                return json_encode($search);
            }

        }

    }
}
