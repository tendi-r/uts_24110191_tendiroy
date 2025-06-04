<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'barcode' => '8999999100011',
                'name' => 'Indomie Goreng',
                'price' => 2500,
                'stock' => 100,
                'category' => 'Mie Instan',
                'description' => 'Indomie rasa ayam bawang'
            ],
            [
                'barcode' => '8999999200022',
                'name' => 'Aqua 600ml',
                'price' => 3000,
                'stock' => 200,
                'category' => 'Minuman',
                'description' => 'Air mineral kemasan botol'
            ],
            [
                'barcode' => '8999999300033',
                'name' => 'Pocari Sweat 500ml',
                'price' => 8000,
                'stock' => 50,
                'category' => 'Minuman',
                'description' => 'Minuman isotonik'
            ],
            [
                'barcode' => '8999999400044',
                'name' => 'Silverqueen 35gr',
                'price' => 12000,
                'stock' => 75,
                'category' => 'Snack',
                'description' => 'Coklat dengan kacang almond'
            ],
            [
                'barcode' => '8999999500055',
                'name' => 'Rinso 500gr',
                'price' => 15000,
                'stock' => 40,
                'category' => 'Deterjen',
                'description' => 'Deterjen bubuk untuk mencuci'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}