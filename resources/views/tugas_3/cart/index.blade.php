@extends('layouts.app')

@section('content')
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <h2 class="text-2xl font-bold mb-6">Keranjang Belanja</h2>

        @if(count($cart) > 0)
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-100 dark:bg-gray-700">
                        <th class="p-3 text-left border-b border-gray-300 dark:border-gray-600">Produk</th>
                        <th class="p-3 text-left border-b border-gray-300 dark:border-gray-600">Harga</th>
                        <th class="p-3 text-left border-b border-gray-300 dark:border-gray-600">Jumlah</th>
                        <th class="p-3 text-left border-b border-gray-300 dark:border-gray-600">Total</th>
                        <th class="p-3 text-left border-b border-gray-300 dark:border-gray-600">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $item)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                        <td class="p-3 border-b border-gray-300 dark:border-gray-600">{{ $item['name'] }}</td>
                        <td class="p-3 border-b border-gray-300 dark:border-gray-600">Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                        <td class="p-3 border-b border-gray-300 dark:border-gray-600">{{ $item['quantity'] }}</td>
                        <td class="p-3 border-b border-gray-300 dark:border-gray-600">Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                        <td class="p-3 border-b border-gray-300 dark:border-gray-600">
                            <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm transition duration-300">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-6 text-right">
            <a href="#" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded transition duration-300">
                Checkout
            </a>
        </div>
        @else
        <div class="text-center py-8">
            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded inline-block">
                <i class="fas fa-shopping-cart mr-2"></i>Keranjang belanja masih kosong.
            </div>
        </div>
        @endif
    </div>
</div>
@endsection