@extends('layouts.app')

@section('content')
<h2 class="mb-4">Keranjang Belanja</h2>

@if(count($cart) > 0)
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cart as $item)
        <tr>
            <td>{{ $item['name'] }}</td>
            <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
            <td>{{ $item['quantity'] }}</td>
            <td>Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
            <td>
                <form action="{{ route('cart.remove', $item['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="text-end">
    <a href="#" class="btn btn-success">Checkout</a>
</div>
@else
<p>Keranjang belanja masih kosong.</p>
@endif
@endsection