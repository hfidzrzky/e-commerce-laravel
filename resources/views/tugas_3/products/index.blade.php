@extends('layouts.app')

@section('content')
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Daftar Produk</h1>
            <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                + Tambah Produk
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($products as $product)
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <img src="{{ $product->image ?? 'https://via.placeholder.com/300x200?text=No+Image' }}" 
                     alt="{{ $product->name }}" 
                     class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">
                        {{ $product->name }}
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-3">
                        {{ Str::limit($product->description, 100) }}
                    </p>
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-blue-600 dark:text-blue-400 font-bold">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </span>
                        <span class="bg-{{ $product->stok > 0 ? 'green' : 'red' }}-100 text-{{ $product->stok > 0 ? 'green' : 'red' }}-800 text-xs px-2 py-1 rounded">
                            Stok: {{ $product->stok }}
                        </span>
                    </div>
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300 disabled:bg-gray-400 disabled:cursor-not-allowed"
                                {{ $product->stok == 0 ? 'disabled' : '' }}>
                            {{ $product->stok > 0 ? 'Tambah ke Keranjang' : 'Stok Habis' }}
                        </button>
                    </form>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-8">
                <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
                    <i class="fas fa-info-circle"></i> Belum ada produk yang tersedia.
                </div>
            </div>
            @endforelse
        </div>

        @if($products->hasPages())
        <div class="mt-6">
            {{ $products->links() }}
        </div>
        @endif
    </div>
</div>
@endsection