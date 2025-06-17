<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_produk',
        'barcode',
        'name',
        'price',
        'stock',
        'category',
        'description'
    ];
}