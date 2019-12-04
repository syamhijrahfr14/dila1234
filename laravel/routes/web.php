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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

Route::resource('kategori_artikel', 'kategoriArtikelcontroller');
Route::get('kategori_artikel.trash','kategoriArtikelcontroller@trash')->name('kategori_artikel.trash');
Route::resource('artikel', 'Artikelcontroller');
Route::get('artikel.trash','Artikelcontroller@trash')->name('artikel.trash');

// Route::get('/kategori_artikel', 'kategoriArtikelcontroller@index')->name('kategori_artikel.index');
// Route::get('/kategori_artikel/create', 'kategoriArtikelcontroller@create')->name('kategori_artikel.create');
// Route::post('/kategori_artikel', 'kategoriArtikelcontroller@store')->name('kategori_artikel.store');
// Route::get('/kategori_artikel/{id}', 'kategoriArtikelcontroller@show')->name('kategori_artikel.show');
// Route::get('/kategori_artikel/{id}/edit','kategoriArtikelcontroller@edit')->name('kategori_artikel.edit');
// Route::patch('/kategori_artikel/{id}', 'kategoriArtikelcontroller@update')->name('kategori_artikel.update');
// Route::delete('/kategori_artikel/{id}', 'kategoriArtikelcontroller@destroy')->name('kategori_artikel.destroy');

Route::resource('kategori_berita', 'kategoriBeritacontroller');
Route::get('kategori_berita.trash','kategoriBeritacontroller@trash')->name('kategori_berita.trash');

// Route::get('/kategori_berita', 'kategoriBeritacontroller@index')->name('kategori_berita.index');
// Route::get('/kategori_berita/create', 'kategoriBeritacontroller@create')->name('kategori_berita.create');
// Route::post('/kategori_berita', 'kategoriBeritacontroller@store')->name('kategori_berita.store');
// Route::get('/kategori_berita/{id}', 'kategoriBeritacontroller@show')->name('kategori_berita.show');
// Route::get('/kategori_berita/{id}/edit','kategoriBeritacontroller@edit')->name('kategori_berita.edit');
// Route::patch('/kategori_berita/{id}', 'kategoriBeritacontroller@update')->name('kategori_berita.update');
// Route::delete('/kategori_berita/{id}', 'kategoriBeritacontroller@destroy')->name('kategori_berita.destroy');

Route::resource('kategori_galeri', 'kategoriGalericontroller');
Route::get('kategori_galeri.trash','kategoriGalericontroller@trash')->name('kategori_galeri.trash');

// Route::get('/kategori_galeri', 'KategoriGalericontroller@index')->name('kategori_galeri.index');
// Route::get('/kategori_galeri/create', 'kategoriGalericontroller@create')->name('kategori_galeri.create');
// Route::post('/kategori_galeri', 'kategoriGalericontroller@store')->name('kategori_galeri.store');
// Route::get('/kategori_galeri/{id}', 'KategoriGalericontroller@show')->name('kategori_galeri.show');
// Route::get('/kategori_galeri/{id}/edit','kategoriGalericontroller@edit')->name('kategori_galeri.edit');
// Route::patch('/kategori_galeri/{id}', 'kategoriGalericontroller@update')->name('kategori_galeri.update');
// Route::delete('/kategori_galeri/{id}', 'kategoriGalericontroller@destroy')->name('kategori_galeri.destroy');

Route::resource('kategori_pengumuman', 'kategoriPengumumancontroller');
Route::get('kategori_pengumuman.trash','kategoriPengumumancontroller@trash')->name('kategori_pengumuman.trash');

// Route::get('/kategori_pengumuman', 'KategoriPengumumancontroller@index')->name('kategori_pengumuman.index');
// Route::get('/kategori_pengumuman/create', 'kategoriPengumumancontroller@create')->name('kategori_pengumuman.create');
// Route::post('/kategori_pengumuman', 'kategoriPengumumancontroller@store')->name('kategori_pengumuman.store');
// Route::get('/kategori_pengumuman/{id}', 'KategoriPengumumancontroller@show')->name('kategori_pengumuman.show');
// Route::get('/kategori_pengumuman/{id}/edit','kategoriPengumumancontroller@edit')->name('kategori_pengumuman.edit');
// Route::patch('/kategori_pengumuman/{id}', 'kategoriPengumumancontroller@update')->name('kategori_pengumuman.update');
// Route::delete('/kategori_pengumuman/{id}', 'kategoriPengumumancontroller@destroy')->name('kategori_pengumuman.destroy');

Route::resource('artikel', 'Artikelcontroller');

// Route::get('/artikel', 'Artikelcontroller@index')->name('artikel.index');
// Route::get('/artikel/create', 'Artikelcontroller@create')->name('artikel.create');
// Route::post('/artikel', 'Artikelcontroller@store')->name('artikel.store');
// Route::get('/artikel/{id}', 'Artikelcontroller@show')->name('artikel.show');
// Route::get('/artikel/{id}/edit','Artikelcontroller@edit')->name('artikel.edit');
// Route::patch('/artikel/{id}', 'Artikelcontroller@update')->name('artikel.update');
// Route::delete('/artikel/{id}', 'Artikelcontroller@destroy')->name('artikel.destroy');

Route::resource('berita', 'Beritacontroller');

// Route::get('/berita', 'Beritacontroller@index')->name('berita.index');
// Route::get('/berita/create', 'Beritacontroller@create')->name('berita.create');
// Route::post('/berita', 'Beritacontroller@store')->name('berita.store');
// Route::get('/berita/{id}', 'Beritacontroller@show')->name('berita.show');
// Route::get('/berita/{id}/edit','Beritacontroller@edit')->name('berita.edit');
// Route::patch('/berita/{id}', 'Beritacontroller@update')->name('berita.update');
// Route::delete('/berita/{id}', 'Beritacontroller@destroy')->name('berita.destroy');

Route::resource('galeri', 'Galericontroller');

// Route::get('/galeri', 'Galericontroller@index')->name('galeri.index');
// Route::get('/galeri/create', 'Galericontroller@create')->name('galeri.create');
// Route::post('/galeri', 'Galericontroller@store')->name('galeri.store');
// Route::get('/galeri/{id}', 'Galericontroller@show')->name('galeri.show');
// Route::get('/galeri/{id}/edit','Galericontroller@edit')->name('galeri.edit');
// Route::patch('/galeri/{id}', 'Galericontroller@update')->name('galeri.update');
// Route::delete('/galeri/{id}', 'Galericontroller@destroy')->name('galeri.destroy');

Route::resource('pengumuman', 'pengumumancontroller');

// Route::get('/pengumuman', 'Pengumumancontroller@index')->name('pengumuman.index');
// Route::get('/pengumuman/create', 'Pengumumancontroller@create')->name('pengumuman.create');
// Route::post('/pengumuman', 'Pengumumancontroller@store')->name('pengumuman.store');
// Route::get('/pengumuman/{id}', 'Pengumumancontroller@show')->name('pengumuman.show');
// Route::get('/pengumuman/{id}/edit','Pengumumancontroller@edit')->name('pengumuman.edit');
// Route::patch('/pengumuman/{id}', 'Pengumumancontroller@update')->name('pengumuman.update');
// Route::delete('/pengumuman/{id}', 'Pengumumancontroller@destroy')->name('pengumuman.destroy');