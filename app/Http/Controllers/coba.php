<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class coba extends Controller
{
    public function coba()
    {
        $heading = 'Coba Aja Dulu Broo';
        $isLoggedIn = true;
        $produk = ['handphone', 'laptop', 'macbook', 'headset'];
        return view('coba', compact('heading', 'isLoggedIn', 'produk'));
    }
}
