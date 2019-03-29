<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index()
    {
    	$produk = 'aqua 400ml';
    	return view('produk/index',compact('produk'));
    }
    public function show()
    {
    	$produk = ['aqua 115 ml','minuman bersoda', 'buku sejarah', 'mouse','cpu'];
    	return view('produk/show',compact('produk'));
    }
}
