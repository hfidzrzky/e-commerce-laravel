<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // tambahkan ini

class ShopProductController extends Controller
{
    // Menampilkan daftar produk
    public function index()
    {
        $products = Product::paginate(12); // ambil data dari tabel products
        return view('tugas_3.products.index', compact('products'));
    }

    // Form tambah produk
    public function create()
    {
        return view('tugas_3.products.create');
    }

    // Simpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'image' => 'required|url'
        ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stok' => $request->stok,
            'image' => $request->image
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }
}
