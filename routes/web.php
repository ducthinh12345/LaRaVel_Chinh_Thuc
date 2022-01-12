<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Controller;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\LoaiSanPhamController;
use \App\Http\Controllers\SanPhamController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class,'index']);

route::get('danhsachSanPham',[LoaiSanPhamController::class,'show2']);

route::get('danhsachLoaiSanPham',[LoaiSanPhamController::class,'index']);

route::get('LoaiSanPham/{loaiSanPham}',[LoaiSanPhamController::class,'show']);

route::get('SanPham/{sanPham}',[SanPhamController::class,'show']);

route::get('SanPham/{sanPham}/edit',[SanPhamController::class,'edit']);

Route::resource('LoaiSanPham', LoaiSanPhamController::class);
Route::resource('SanPham', SanPhamController::class);