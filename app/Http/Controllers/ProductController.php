<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Menampilkan semua produk
    public function index()
    {
        $produk = [
            ['nama' => 'Laptop', 'harga' => 7000000],
            ['nama' => 'HP', 'harga' => 3000000],
        ];

        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // Form tambah produk
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Sementara: tampilkan data input
        return "Produk: " . $request->nama . " - Harga: " . $request->harga;
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}