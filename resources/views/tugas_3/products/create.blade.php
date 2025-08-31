@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Tambah Produk Baru</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Harga <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" required>
                    </div>

                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" id="stok" name="stok" min="0" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">URL Gambar <span class="text-danger">*</span></label>
                        <input type="url" class="form-control" id="image" name="image" 
                               placeholder="https://example.com/image.jpg" required>
                        <small class="text-muted">Gunakan URL gambar yang valid</small>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('products.index') }}" class="btn btn-secondary me-md-2">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan Produk</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection