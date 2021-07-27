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

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/notis-baru', function () {
    return view('pages.notisbaru');
});

Route::get('/papar-borang', function () {
    return view('pages.paparborang');
});

Route::get('/status-notis', function () {
    return view('pages.statusnotis');
});

Route::get('/premis', function () {
    return view('pages.senaraipremis');
});

Route::get('/tambah-premis', function () {
    return view('pages.tambahpremis');
});

Route::get('/maklumat-premis', function () {
    return view('pages.maklumatpremis');
});

Route::get('/jadual-mingguan', function () {
    return view('pages.jadualminggu');
});

Route::get('/jadual-bulanan', function () {
    return view('pages.jadualbulan');
});

Route::get('/panduan-penetapan-masa', function () {
    return view('pages.panduantepatmasa');
});

Route::get('/panduan-akta', function () {
    return view('pages.panduanakta');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/tetapan', function () {
    return view('pages.tetapan');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
