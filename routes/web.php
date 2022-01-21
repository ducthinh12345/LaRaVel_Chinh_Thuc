<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Controller;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\LoaiSanPhamController;
use \App\Http\Controllers\SanPhamController;
use \App\Http\Controllers\NhaCungCapController;

Route::get('/', [HomeController::class,'index']);

route::get('danhsachSanPham',[SanPhamController::class,'index']);
route::get('SanPham/{sanPham}',[SanPhamController::class,'show']);
route::get('SanPham/{sanPham}/edit',[SanPhamController::class,'edit']);
route::get('SanPham/create',[SanPhamController::class,'create']);
route::get('ThemSanPham',[SanPhamController::class,'themSanPham']);

route::get('danhsachLoaiSanPham',[LoaiSanPhamController::class,'index']);
route::get('LoaiSanPham/{loaiSanPham}',[LoaiSanPhamController::class,'show']);
route::get('LoaiSanPham/{loaiSanPham}/edit',[LoaiSanPhamController::class,'edit']);
route::get('ThemLoaiSanPham',[LoaiSanPhamController::class,'themLoaiSanPham']);
Route::get('LoaiSanPham/search', [HomeController::class,'searchLoaiSP']);

Route::resource('LoaiSanPham', LoaiSanPhamController::class);
Route::resource('SanPham', SanPhamController::class);
Route::resource('NhaCungCap', NhaCungCapController::class);