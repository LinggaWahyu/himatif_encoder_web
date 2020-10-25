<?php

use Illuminate\Support\Facades\Route;

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

Route::namespace('Frontend')->group(function () {
    Route::get('/', 'HomeController@index')->name('frontend.home');

    Route::get('/berita', 'BeritaController@index')->name('frontend.berita.index');
    Route::get('/berita/{slug}', 'BeritaController@show')->name('frontend.berita.show');

    Route::get('/komunitas', 'KomunitasController@index')->name('frontend.komunitas.index');
    Route::get('/komunitas/{slug}', 'KomunitasController@show')->name('frontend.komunitas.show');

    Route::get('/kegiatan-besar', 'KegiatanBesarController@index')->name('frontend.kegiatan-besar.index');
    Route::get('/kegiatan-besar/{slug}', 'KegiatanBesarController@show')->name('frontend.kegiatan-besar.show');

    Route::get('/profile-jurusan/sejarah', 'ProfileJurusanController@sejarah')->name('frontend.profile-jurusan.sejarah');
    Route::get('/profile-jurusan/kepengurusan', 'ProfileJurusanController@kepengurusan')->name('frontend.profile-jurusan.kepengurusan');

    Route::get('/galeri', 'GaleriUmumController@index')->name('frontend.gallery.index');

    Route::get('/kontak', 'KontakController@index')->name('frontend.kontak.index');
    Route::post('/kontak', 'KontakController@store')->name('frontend.kontak.store');
});

Auth::routes(['verify' => true]);

Route::prefix('admin')->middleware('auth')->namespace('Admin')->group(function () {
    Route::get('/home', 'HomeController@index')->middleware('verified');

    Route::resource('divisis', 'DivisiController');

    Route::resource('jabatanPenguruses', 'JabatanPengurusController');

    Route::resource('penguruses', 'PengurusController');

    Route::resource('komunitas', 'KomunitasController');

    Route::resource('galeriKomunitas', 'GaleriKomunitasController');

    Route::resource('categoryBeritas', 'CategoryBeritaController');

    Route::resource('beritas', 'BeritaController');

    Route::resource('galeriUmums', 'GaleriUmumController');

    Route::resource('developers', 'DeveloperController');

    Route::resource('kontaks', 'KontakController');

    Route::get('profile-jurusan', 'ProfileJurusanController@index')->name('profile-jurusan');
    Route::post('profile-jurusan', 'ProfileJurusanController@store')->name('profile-jurusan');
});
