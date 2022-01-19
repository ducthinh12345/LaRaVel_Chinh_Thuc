<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Controller;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\LoaiSanPhamController;
use \App\Http\Controllers\SanPhamController;

Route::get('/', [HomeController::class,'index']);

route::get('danhsachSanPham',[SanPhamController::class,'index']);

route::get('danhsachLoaiSanPham',[LoaiSanPhamController::class,'index']);

route::get('LoaiSanPham/{loaiSanPham}',[LoaiSanPhamController::class,'show']);

route::get('SanPham/{sanPham}',[SanPhamController::class,'show']);

route::get('SanPham/{sanPham}/edit',[SanPhamController::class,'edit']);

route::get('LoaiSanPham/{loaiSanPham}/edit',[LoaiSanPhamController::class,'edit']);

route::get('SanPham/create',[SanPhamController::class,'create']);

route::get('ThemLoaiSanPham',[LoaiSanPhamController::class,'themLoaiSanPham']);

route::get('ThemSanPham',[SanPhamController::class,'themSanPham']);

Route::resource('LoaiSanPham', LoaiSanPhamController::class);
Route::resource('SanPham', SanPhamController::class);