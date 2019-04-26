<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class produkController extends Controller
{
    /*public function index()
    {
    	$produk = 'aqua 400ml';
    	return view('produk/index',compact('produk'));
    }*/
    public function index()
     {
        $produk = DB::table('barangs')
        ->join('kategori','barangs.id_kategori','=','kategori.id')
        ->get();
        return view('produk/index',compact('produk'));
    }
    // public function show()
    // {
    // 	$produk = ['aqua 115 ml','minuman bersoda', 'buku sejarah', 'mouse','cpu'];
    // 	return view('produk/show',compact('produk'));
    // }
    public function store()
    {
        DB::table('barangs')
        ->insert([
            'nama' => 'lampu',
            'id_kategori' => 1,
            'qty' => 14, 'harga_beli' => 40000,
            'harga_jual' => 60000,
        ]);
        echo "data berhasil ditambahkan";
    }

     public function update()
     {
  
        DB::table('barangs')->where('id',3)
        ->update([
            'nama' => 'bola lampu',
            'qty' => 20,
            'harga_beli' => 45000,
            'harga_jual' => 65000,
        ]);
        echo "data berhasil diperbaharui"; 
    }
    
     public function delete()
     {
  
        DB::table('barangs')->where('id',3)
        ->delete();
        echo "data berhasil dihapus"; 
    
    }

}
