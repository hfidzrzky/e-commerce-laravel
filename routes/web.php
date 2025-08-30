<?php

use Illuminate\Support\Facades\Route;

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
