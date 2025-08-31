@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Daftar Produk</h2>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        @forelse ($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}" 
                     style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text text-muted small mb-2">
                        {{ Str::limit($product->description, 100) }}
                    </p>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="text-primary fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                        <span class="badge bg-{{ $product->stok > 0 ? 'success' : 'danger' }}">
                            Stok: {{ $product->stok }}
                        </span>
                    </div>
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success w-100" 
                                {{ $product->stok == 0 ? 'disabled' : '' }}>
                            <i class="fas fa-cart-plus"></i> 
                            {{ $product->stok > 0 ? 'Tambah ke Keranjang' : 'Stok Habis' }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info text-center">
                <i class="fas fa-info-circle"></i> Belum ada produk yang tersedia.
            </div>
        </div>
        @endforelse
    </div>

    <!-- Pagination (jika ada) -->
    @if($products->hasPages())
    <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
    </div>
    @endif
</div>
@endsection