<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route Utama
Route::get('/', function () {
    return 'Ini route utama'; 
});

// Route Product
Route::get('/products', function () {
    return 'Ini route products';
});

// Route Cart
Route::get('/cart', function () {
    return 'Ini route cart';
});

// Route Checkout
Route::get('/checkout', function () {
    return 'Ini route checkout';
});

// Produk
Route::get('/produk', [ProductController::class, 'index']);
Route::get('/produk/create', [ProductController::class, 'create']);
Route::post('/produk', [ProductController::class, 'store']);