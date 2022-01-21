<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LoaiSanPham;
use App\Models\SanPham;
use App\Models\NhaCungCap;

class HomeController extends Controller
{
    public function index()
    {
        $listLoaiSanPham=LoaiSanPham::all();
        $listSanPham=SanPham::all();
        $listNhaCungCap=NhaCungCap::all();
        return view('Admin.HomeAdmin',[
            'listLoai'=>$listLoaiSanPham,
            'listSP'=>$listSanPham,
            'listNhaCungCap'=>$listNhaCungCap,
        ]);
    }
   
}
