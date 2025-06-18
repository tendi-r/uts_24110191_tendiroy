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
    ],
    [
        'barcode' => '8999999600066',
        'name' => 'Lifebuoy Sabun 100gr',
        'price' => 4500,
        'stock' => 60,
        'category' => 'Personal Care',
        'description' => 'Sabun mandi antiseptik'
    ],
    [
        'barcode' => '8999999700077',
        'name' => 'Pepsodent 75gr',
        'price' => 7000,
        'stock' => 80,
        'category' => 'Personal Care',
        'description' => 'Pasta gigi perlindungan total'
    ],
    [
        'barcode' => '8999999800088',
        'name' => 'Tissue Paseo 250 sheet',
        'price' => 14000,
        'stock' => 90,
        'category' => 'Kebutuhan Rumah',
        'description' => 'Tissue wajah berkualitas'
    ],
    [
        'barcode' => '8999999900099',
        'name' => 'Baygon Spray 600ml',
        'price' => 28000,
        'stock' => 30,
        'category' => 'Kebutuhan Rumah',
        'description' => 'Anti nyamuk aerosol'
    ],
    [
        'barcode' => '8999999100100',
        'name' => 'Kecap ABC 275ml',
        'price' => 11000,
        'stock' => 120,
        'category' => 'Bumbu Dapur',
        'description' => 'Kecap manis legendaris'
    ],
    [
        'barcode' => '8999999100111',
        'name' => 'Sambal ABC Sachet',
        'price' => 500,
        'stock' => 300,
        'category' => 'Bumbu Dapur',
        'description' => 'Sambal praktis sekali pakai'
    ],
    [
        'barcode' => '8999999100122',
        'name' => 'Teh Botol Sosro 350ml',
        'price' => 4500,
        'stock' => 150,
        'category' => 'Minuman',
        'description' => 'Teh manis dalam botol'
    ],
    [
        'barcode' => '8999999100133',
        'name' => 'Ultra Milk Coklat 200ml',
        'price' => 6000,
        'stock' => 100,
        'category' => 'Minuman',
        'description' => 'Susu UHT rasa coklat'
    ],
    [
        'barcode' => '8999999100144',
        'name' => 'Tango Wafer Vanilla',
        'price' => 8500,
        'stock' => 95,
        'category' => 'Snack',
        'description' => 'Wafer renyah isi vanilla'
    ],
    [
        'barcode' => '8999999100155',
        'name' => 'Telur Ayam 1 Kg',
        'price' => 32000,
        'stock' => 25,
        'category' => 'Produk Segar',
        'description' => 'Telur ayam segar 1kg'
    ],


        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}