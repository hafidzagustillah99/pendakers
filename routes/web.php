<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaerahController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\PerjanjianController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SamarindaController;
use App\Http\Controllers\BalikpapanController;
use App\Http\Controllers\BontangController;
use App\Http\Controllers\KukarController;
use App\Http\Controllers\KutimController;
use App\Http\Controllers\KubarController;
use App\Http\Controllers\BerauController;
use App\Http\Controllers\MahakamController;
use App\Http\Controllers\penajamController;
use App\Http\Controllers\PaserController;
use App\Http\Controllers\UsersController;

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

Route::resource('user', UsersController::class);

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

Route::resource('balikpapan', BalikpapanController::class);
Route::get('/balikpapan/cari',[BalikpapanController::class, 'cari']);
Route::get('balikpapan.cetakku',[BalikpapanController::class, 'cetakku']);

Route::resource('bontang', BontangController::class);
Route::get('/bontang/cari',[BontangController::class, 'cari']);
Route::get('bontang.cetakbontang',[BontangController::class, 'cetakbontang']);

Route::resource('kukar', KukarController::class);
Route::get('/kukar/cari',[KukarController::class, 'cari']);
Route::get('kukar.cetakkukar',[KukarController::class, 'cetakkukar']);

Route::resource('kutim', KutimController::class);
Route::get('/kutim/cari',[KutimController::class, 'cari']);
Route::get('kutim.cetakkutim',[KutimController::class, 'cetakkutim']);

Route::resource('kubar', KubarController::class);
Route::get('/kubar/cari',[KubarController::class, 'cari']);
Route::get('kubar.cetakkubar',[KubarController::class, 'cetakkubar']);

Route::resource('berau', BerauController::class);
Route::get('/berau/cari',[BerauController::class, 'cari']);
Route::get('berau.cetakberau',[BerauController::class, 'cetakberau']);

Route::resource('mahakam', MahakamController::class);
Route::get('/mahakam/cari',[MahakamController::class, 'cari']);
Route::get('mahakam.cetakmahakam',[MahakamController::class, 'cetakmahakam']);

Route::resource('penajam', PenajamController::class);
Route::get('/penajam/cari',[PenajamController::class, 'cari']);
Route::get('penajam.cetakpenajam',[PenajamController::class, 'cetakpenajam']);

Route::resource('paser', PaserController::class);
Route::get('/paser/cari',[PaserController::class, 'cari']);
Route::get('paser.cetakpaser',[PaserController::class, 'cetakpaser']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
