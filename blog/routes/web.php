<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
echo "Welcome";
});

route::get('/pelanggan', 'pelangganController@index');

route::resource('produk','produkControllerCURD');

Route::resource('produk','produkController');


Route::get('/hello', function () {
	return '<center><h1>hello world</h1>
	</center>';
});

route::get('/index', function () {
	echo "uji coba route dengan methode GET";
});

Route::get('/produk/show', 'produkController@show');

Route::get('/produk', 'produkController@index');
route::get('/halaman', function() {
	$title = 'harry poter' ;
	$konten = 'harry potter and the deathly hallows : part 2';
	return view('konten.halaman', compact('title','konten'));
} ) ;



//route::post ('/store', function () {
	//sintak untuk menyimpan data

//});


//route::put('/update', function (){
	//sintak untuk update data
///});

//route::delete ('/delete', function () { 
 //sintak untuk menghapus data
 //});

 //Route::match(['get','post'],'/welcome' function () {
// untuk merespon beberapa http
//});

 //Route::any('/welcome' function () {
// untuk merespon semua http
//});



route::get('/show/{id?}', function ($id=1) { 
	echo "Nilai Parameter Adalah ".$id;
});

route::get('/edit/{nama}', function ($nama) {
	echo "nama Parameter  adalah ".$nama;
})->where('nama', '[A-Za-z]+');

route::get('/index', function() {
	echo "<a href=".route('create')."'>akses route dengan nama </a>";
});

route::get('/create', function () {
	echo "route diakses menggunakan nama";

	})->name('create');

route::get('/produk', 'produkController@index');
