<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::resource('products', ProductController::class);

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/artikel1', function () {
    return view('artikel1');
});

Route::get('/artikel2', function () {
    return view('artikel2');
});


Route::get('/ListCinema', function () {
    return view('Bioskop.ListCinema');
});

Route::get('/ListFilm', function () {
    return view('Bioskop.ListFilm');
});


Route::get('/Menu', function () {
    return view('Bioskop.Menu');
});
