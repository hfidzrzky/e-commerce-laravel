<?php

use App\Http\Controllers\ShopProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

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

// route breeze

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';