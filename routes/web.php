<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\coba;

/*
|--------------------------------------------------------------------------
| Route: Tugas Sebelumnya
|--------------------------------------------------------------------------
*/
Route::get('/coba', [coba::class, 'coba'])->name('coba');
// Route statis (contoh tugas awal)
Route::get('/products-old', function () {
    return 'Ini route products (versi lama)';
});
Route::get('/cart-old', function () {
    return 'Ini route cart (versi lama)';
});
Route::get('/checkout-old', function () {
    return 'Ini route checkout (versi lama)';
});

// Route produk (versi lama)
Route::get('/produk', [ProductController::class, 'index']);
Route::get('/produk/create', [ProductController::class, 'create']);
Route::post('/produk', [ProductController::class, 'store']);

/*
|--------------------------------------------------------------------------
| Route: Tugas E-Commerce (Sesi 12.6)
|--------------------------------------------------------------------------
| Bagian ini adalah route utama untuk aplikasi e-commerce sederhana
| yang menggunakan controller Product & Cart.
*/

// Halaman Utama
Route::get('/', function () {
    return view('tugas_3.home'); 
})->name('tugas_3.home');

// Produk
Route::get('/products', [ShopProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ShopProductController::class, 'create'])->name('products.create');
Route::post('/products', [ShopProductController::class, 'store'])->name('products.store');

// Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

// Checkout
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');