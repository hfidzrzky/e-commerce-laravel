@extends('layouts.app')

@section('content')
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <!-- Hero Section -->
        <div class="text-center py-12 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-lg mb-8">
            <h1 class="text-4xl font-bold mb-4">Selamat Datang di MyShop</h1>
            <p class="text-xl mb-6">Temukan berbagai produk menarik dengan harga terbaik</p>
            <a href="{{ route('products.index') }}" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                Lihat Produk
            </a>
        </div>

        <!-- Featured Products -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <!-- Product Card 1 - Smartphone -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?w=300&h=200&fit=crop" 
                     alt="Smartphone" 
                     class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Macbook</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">Macbook terbaru 2025 dengan fitur canggih</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 dark:text-blue-400 font-bold">Rp 2.500.000</span>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Stok: 8</span>
                    </div>
                    <button class="w-full bg-blue-600 text-white py-2 rounded-lg mt-3 hover:bg-blue-700 transition duration-300">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <!-- Product Card 2 - Laptop -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=300&h=200&fit=crop" 
                     alt="Laptop" 
                     class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Laptop</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">Laptop gaming dengan performa tinggi</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 dark:text-blue-400 font-bold">Rp 8.000.000</span>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Stok: 3</span>
                    </div>
                    <button class="w-full bg-blue-600 text-white py-2 rounded-lg mt-3 hover:bg-blue-700 transition duration-300">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>

            <!-- Product Card 3 - Headphone -->
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&h=200&fit=crop" 
                     alt="Headphone" 
                     class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Headphone</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">Headphone wireless dengan sound quality terbaik</p>
                    <div class="flex justify-between items-center">
                        <span class="text-blue-600 dark:text-blue-400 font-bold">Rp 1.200.000</span>
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Stok: 10</span>
                    </div>
                    <button class="w-full bg-blue-600 text-white py-2 rounded-lg mt-3 hover:bg-blue-700 transition duration-300">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="text-center mt-12">
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-4">Temukan Lebih Banyak Produk</h2>
            <a href="{{ route('products.index') }}" class="bg-gradient-to-r from-green-500 to-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:from-green-600 hover:to-blue-700 transition duration-300">
                Jelajahi Katalog Lengkap
            </a>
        </div>
    </div>
</div>
@endsection