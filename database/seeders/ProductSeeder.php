<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var products Produtos iniciais da tabela products */
        $products = [
            [
                'name' => 'Chiken Burger',
                'description' => 'Delicioso hambúrguer de frango',
                'price' => 20.00,
                'image' => storage_path('app\public\chicken-burguer.png'),
            ],
            [
                'name' => 'Baccon Supreme',
                'description' => 'O hambúrguer do tamanho certo para sua fome',
                'price' => 50.00,
                'image' => storage_path('app\public\bacon-supreme.png'),
            ],
            [
                'name' => 'Monster Burger',
                'description' => 'hambúrguer artesanal 400g',
                'price' => 29.99,
                'image' => storage_path('app\public\chicken-burguer.png'),
            ],
            [
                'name' => 'Sausage',
                'description' => 'hambúrguer de Linguiça',
                'price' => 49.99,
                'image' => storage_path('app\public\chicken-burguer.png'),
            ],
            [
                'name' => 'Combo 01',
                'description' => 'hambúrguer com baccon e maionese temperada, refrigerante e batata frita ',
                'price' => 90.00,
                'image' => storage_path('app\public\chicken-burguer.png'),
            ],
            [
                'name' => 'Combo 02',
                'description' => 'hambúrguer e batatas rusticas fritas',
                'price' => 90.00,
                'image' => storage_path('app\public\chicken-burguer.png'),
            ],
            [
                'name' => 'combo 03',
                'description' => 'hambúrguer no pão com gergelim e batatas rusticas fritas',
                'price' => 90.00,
                'image' => storage_path('app\public\chicken-burguer.png'),
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

    }
}
