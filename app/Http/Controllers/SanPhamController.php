<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\LoaiSanPham;
use Illuminate\Http\Requests;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\StoreSanPhamRequest;
use App\Http\Requests\UpdateSanPhamRequest;

class SanPhamController extends Controller
{
    protected function FixImage(SanPham $SanPham)   
    {
        if (Storage::disk('public')->exists($SanPham->HinhAnh)) {
            $SanPham->HinhAnh= Storage::url($SanPham->HinhAnh);

        }
        else{
            $SanPham->HinhAnh='/assets/images/faces/face26.jpg';
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listSanPham=SanPham::all();
        foreach($listSanPham as $sp)
        {
            $this->FixImage($sp);

        }
        return view('Admin.SanPham_index',['listSanPham'=>$listSanPham]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $listLoai=LoaiSanPham::all();
        return view('Admin.SanPham_create',['listLoai'=>$listLoai]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSanPhamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSanPhamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function show(SanPham $sanPham)
    {
        $this->FixImage($sanPham);
        return view('Admin.SanPham_index',['listSanPham'=>$sanPham]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(SanPham $sanPham)
    {
        //
        $this->FixImage($sanPham);
        $listLoai=LoaiSanPham::all();
        return view('Admin.SanPham_edit',['SanPham'=>$sanPham,'listLoai'=>$listLoai]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSanPhamRequest  $request
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSanPhamRequest $request, SanPham $sanPham)
    {
        //
        if($request->hasFile('hinhanh'))
        {
            $sanPham->HinhAnh=$request->file('hinhanh')->store('images/sp/'.$sanPham->id,'public');
        }
        $sanPham->fill([
            'TenSanPham'=>$request->input('tensp'),
            'Gia'=>$request->input('gia'),
            'Size'=>$request->input('size'),
            'Mau'=>$request->input('mau'),
            'SoLuong'=>$request->input('soluong'),
            'IdLoaiSanPham'=>$request->input('loaisp'),
            
        ]);
        $sanPham->save();
        return Redirect::route('SanPham.show',['SanPham'=>$sanPham]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(SanPham $sanPham)
    {
        //
    }
}
