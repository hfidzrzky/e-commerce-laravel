<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Sederhana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">MyShop</a>
            <div>
                <a href="{{ route('products.index') }}" class="btn btn-outline-light btn-sm me-2">Produk</a>
                <a href="{{ route('products.create') }}" class="btn btn-outline-light btn-sm me-2">Tambah Produk</a>
                <a href="{{ route('cart.index') }}" class="btn btn-warning btn-sm me-2">Keranjang</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container py-4">
        @yield('content')
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p class="mb-0">&copy; {{ date('Y') }} MyShop. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>