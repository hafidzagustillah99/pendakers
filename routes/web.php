<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaerahController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\PerjanjianController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SamarindaController;

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

;

route::get('/', [DashboardController::class, 'index']);
route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/refereshcapcha', 'HelperController@refereshCapcha');
Route::resource('kota', KotaController::class);
Route::resource('perjanjian', PerjanjianController::class);
Route::get('/perjanjian/cari',[PerjanjianController::class, 'cari']);
Route::get('perjanjian.cetakperjanjian',[PerjanjianController::class, 'cetakperjanjian']);

Route::resource('daftar_daerah', DaerahController::class);
Route::resource('tentang', TentangController::class);
Route::get('tentang.cetak',[TentangController::class, 'cetak']);
Route::get('tentang.cetaksemua',[TentangController::class, 'cetaksemua']);

Route::resource('samarinda', SamarindaController::class);
Route::get('/samarinda/cari',[SamarindaController::class, 'cari']);
Route::get('samarinda.cetak',[SamarindaController::class, 'cetak']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
