<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('', [HomePageController::class, 'index'])->name('page.home');
Route::get('kategori', [HomePageController::class, 'kategori'])->name('page.kategori');

Route::group(['prefix'=>''], function() {

    // index
    Route::get('home', [HomeController::class, 'index'])->name('home');

    // kategori
    Route::get('kategori', [HomeController::class, 'kategori'])->name('kategori');
});

Route::group(['prefix'=>'admin'], function() {

    // dashboard
    Route::resource('dashboard', DashboardController::class);

    // kategori
    Route::resource('kategori', KategoriController::class);

    // produk
    Route::resource('produk', ProdukController::class);
});
