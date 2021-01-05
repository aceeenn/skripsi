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

//route bawaan dari laravel
Route::get('/', function () {
    return view('index');
});

// Route::get('halo', function () {
//     return 'Haloooo, selamat datang di web belajar pertama saya';
// });

// Route::get('blog', function () {
//     return view('blog');
// });

Route::get('dosen', 'DosenController@index');

//Route::get('/pegawai/{nama}', 'PegawaiController@index');

Route::get('/formulir', 'PegawaiController@formulir');

Route::post('/formulir/proses', 'PegawaiController@proses');


//Route blog
Route::get('/blog', 'BlogController@home');

Route::get('/blog/tentang', 'BlogController@tentang');

Route::get('/blog/kontak', 'BlogController@kontak');


//Route::group(['middleware' => ['auth']], function () {

    //CRUD pegawai
    Route::get('/pegawai', 'PegawaiController@index');

    Route::get('/pegawai/tambah', 'PegawaiController@tambah');

    Route::post('/pegawai/store', 'PegawaiController@store');

    Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');

    Route::post('/pegawai/update', 'PegawaiController@update');

    Route::get('/pegawai/hapus/{id}', 'PegawaiController@hapus');

    Route::get('/pegawai/cari', 'PegawaiController@cari');

    Route::get('/pegawai/input', 'PegawaiController@input');

    Route::post('/pegawai/proses', 'PegawaiController@proses');
    
// });







//CRUD mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index');

Route::get('/mahasiswa/tambah', 'MahasiswaController@tambah');

Route::post('/mahasiswa/store', 'MahasiswaController@store');

Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit');

Route::post('/mahasiswa/update', 'MahasiswaController@update');

Route::get('/mahasiswa/hapus/{id}', 'MahasiswaController@hapus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//CRUD pekerja

Route::get('/pekerja', 'PekerjaController@index');

Route::get('/pekerja/tambah', 'PekerjaController@tambah');

Route::post('/pekerja/store', 'PekerjaController@store');

Route::get('/pekerja/edit/{id}', 'PekerjaController@edit');

Route::put('/pekerja/update/{id}', 'PekerjaController@update');

Route::get('/pekerja/hapus/{id}', 'PekerjaController@delete');

Route::get('/pekerja/trash', 'PekerjaController@trash');

Route::get('/pekerja/kembalikan/{id}', 'PekerjaController@kembalikan');

Route::get('/pekerja/kembalikan_semua', 'PekerjaController@kembalikan_semua');

Route::get('/pekerja/hapus_permanen/{id}', 'PekerjaController@hapus_permanen');

Route::get('/pekerja/hapus_permanen_semua', 'PekerjaController@hapus_permanen_semua');