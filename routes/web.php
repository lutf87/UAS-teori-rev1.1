<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::group(['prefix'=>'/'], function() {

    // index
    Route::get('', [HomeController::class, 'index'])->name('home');

    // kategori
    Route::get('/kategori', [HomeController::class, 'kategori'])->name('kategori');
});

Route::group(['prefix','admin'], function() {
    Route::resource('dashboard', DashboardController::class);
});
