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
                'image' => 'chicken-burguer.png',
            ],
            [
                'name' => 'Baccon Supreme',
                'description' => 'O hambúrguer do tamanho certo para sua fome',
                'price' => 50.00,
                'image' => 'bacon-supreme.png',
            ],
            [
                'name' => 'Monster Burger',
                'description' => 'Hambúrguer artesanal 400g',
                'price' => 29.99,
                'image' => 'monster-burguer.png',
            ],
            [
                'name' => 'Sausage',
                'description' => 'Hambúrguer de Linguiça',
                'price' => 49.99,
                'image' => 'sausage.png',
            ],[
                'name' => 'Hungry master',
                'description' => 'Hambúrguer 400g, cebola e cheddar',
                'price' => 90.00,
                'image' => 'hungry-master.png',
            ],
            [
                'name' => 'Combo 01',
                'description' => 'Hambúrguer com baccon e maionese temperada, refrigerante e batata frita ',
                'price' => 90.00,
                'image' => 'combo1.png',
            ],
            [
                'name' => 'Combo 02',
                'description' => 'Hambúrguer e batatas rusticas fritas',
                'price' => 90.00,
                'image' => 'combo2.png',
            ],
            [
                'name' => 'combo 03',
                'description' => 'Hambúrguer no pão com gergelim e batatas rusticas fritas',
                'price' => 90.00,
                'image' => 'combo3.png',
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

    }
}
