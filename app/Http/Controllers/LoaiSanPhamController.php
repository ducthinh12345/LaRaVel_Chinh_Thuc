<?php

namespace App\Http\Controllers;

use App\Models\LoaiSanPham;
use App\Models\SanPham;
use Illuminate\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreLoaiSanPhamRequest;
use App\Http\Requests\UpdateLoaiSanPhamRequest;

class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $loaiSanPham= LoaiSanPham::all();
        return view('Admin.LoaiSanPham_index',['listLoai'=>$loaiSanPham]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
public function themLoaiSanPham()
{
    return view('Admin.LoaiSanPham_create');
}
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLoaiSanPhamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $LoaiSanPham = new LoaiSanPham;
        $LoaiSanPham->fill([
       
                'TenLoaiSanPham'=>$request->input('tenlsp'),
                'TrangThai'=>$request->input('TrangThai')
        ]);
        $LoaiSanPham->save();
        return Redirect::route('LoaiSanPham.index',['LoaiSanPham'=>$LoaiSanPham]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */

    public function show2()
    {
        $listSanPham=SanPham::all();
        return view('Admin.LoaiSanPham',['listSanPham'=>$listSanPham]);
    }

    public function show(LoaiSanPham $loaiSanPham)
    {
        $listSanPham = SanPham::where('IdLoaiSanPham','=',$loaiSanPham->id)->get();

      return view('Admin.LoaiSanPham',[
            'loaiSanPham'=>$loaiSanPham,
            'listSanPham'=>$listSanPham,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiSanPham $loaiSanPham)
    {
        // $LoaiSanPham=LoaiSanPham::all();
        // dd($loaiSanPham);
        $LoaiSanPham = LoaiSanPham::where('id','=',$loaiSanPham->id)->get();
        
        return view('Admin.LoaiSanPham_edit',[
            'sualoaiSanPham'=>$LoaiSanPham
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLoaiSanPhamRequest  $request
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiSanPham $LoaiSanPham)
    {
        // dd($LoaiSanPham);
        $LoaiSanPham->fill([
            'TenLoaiSanPham'=>$request->input('tenloaisp'),
            
            'TrangThai'=>$request->input('TrangThai'),
            
        ]);
        $LoaiSanPham->save();
        return Redirect::route('LoaiSanPham.show',['LoaiSanPham'=>$LoaiSanPham]);

        // return Redirect::route('LoaiSanPham.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, LoaiSanPham $LoaiSanPham)
    {
       $LoaiSanPham->fill([
            'TenLoaiSanPham'=>$request->input('tenloaisp'),
            
            'TrangThai'=>$request->input('TrangThai'),
            
        ]);
        $LoaiSanPham->save();
        

        return Redirect::route('LoaiSanPham.index');
    }
}
