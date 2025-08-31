@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="mb-4">Selamat Datang di MyShop</h1>
    <p class="lead">Temukan berbagai produk menarik dengan harga terbaik!</p>
    <a href="{{ route('products.index') }}" class="btn btn-primary btn-lg mt-3">Lihat Produk</a>
</div>
@endsection
