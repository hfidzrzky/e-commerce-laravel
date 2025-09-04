@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
            <!-- Header -->
            <div class="bg-blue-600 text-white px-6 py-4 rounded-t-lg">
                <h2 class="text-xl font-semibold">Tambah Produk Baru</h2>
            </div>

            <!-- Form -->
            <form action="{{ route('products.store') }}" method="POST" class="space-y-6 p-6">
                @csrf
                
                <!-- Nama Produk -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Nama Produk <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="name" name="name" required
                           class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                           placeholder="Masukkan nama produk">
                </div>

                <!-- Deskripsi -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        Deskripsi <span class="text-red-500">*</span>
                    </label>
                    <textarea id="description" name="description" rows="4" required
                              class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                              placeholder="Masukkan deskripsi produk"></textarea>
                </div>

                <!-- Harga dan Stok -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Harga -->
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Harga (Rp) <span class="text-red-500">*</span>
                        </label>
                        <input type="number" id="price" name="price" min="0" step="1000" required
                               class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                               placeholder="0">
                    </div>

                    <!-- Stok -->
                    <div>
                        <label for="stok" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Stok <span class="text-red-500">*</span>
                        </label>
                        <input type="number" id="stok" name="stok" min="0" required
                               class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                               placeholder="0">
                    </div>
                </div>

                <!-- URL Gambar -->
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                        URL Gambar <span class="text-red-500">*</span>
                    </label>
                    <input type="url" id="image" name="image" required
                           class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:text-white"
                           placeholder="https://example.com/image.jpg">
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                        Gunakan URL gambar yang valid dari internet
                    </p>
                </div>

                <!-- Contoh URL Gambar -->
                <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-md">
                    <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Contoh URL Gambar:</h4>
                    <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-1">
                        <li>• https://images.unsplash.com/photo-1611186871348-b1ce696e52c9</li>
                        <li>• https://images.unsplash.com/photo-1496181133206-80ce9b88a853</li>
                        <li>• https://images.unsplash.com/photo-1505740420928-5e560c06d30e</li>
                    </ul>
                </div>

                <!-- Buttons -->
                <div class="flex justify-end space-x-4 pt-6">
                    <a href="{{ route('products.index') }}" 
                       class="px-6 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Kembali
                    </a>
                    <button type="submit" 
                            class="px-6 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Simpan Produk
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection