<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiSanPham;
use App\Models\SanPham;
use App\Models\NhaCungCap;
use Illuminate\Http\Requests;

use Illuminate\Support\Facades\Redirect;

class NhaCungCapcontroller extends Controller
{
    public function index()
    {

        $listNhaCungCap=NhaCungCap::all();

        if($ncc=request()->timkiemid)
        {
            $listNhaCungCap=NhaCungCap::where('id','=',$ncc)->paginate(15);
        }
        
        if($ncc=request()->timkiemten)
        {
            $listNhaCungCap=NhaCungCap::where('TenNhaCungCap','like','%'.$ncc.'%')->paginate(15);
        }

        return view('Admin.NhaCungCap_index',compact('listNhaCungCap'));
    }
    public function show(NhaCungCap $NhaCungCap)
    {        
        $ctNhaCungCap = NhaCungCap::where('id','=',$NhaCungCap->id)->get();  
       
        
        return view('Admin.NhaCungCap_show',[
            'ctNhaCungCap'=>$ctNhaCungCap,
            'NhaCungCap'=>$NhaCungCap,
            
        ]);
    }
    public function edit(NhaCungCap $NhaCungCap)
    {
        $suaNhaCungCap = NhaCungCap::where('id','=',$NhaCungCap->id)->get();

        return view('Admin.NhaCungCap_edit',[
            'suaNhaCungCap'=>$suaNhaCungCap,
            ]);
    }
    public function update(Request $request, NhaCungCap $NhaCungCap)
    {        
        $NhaCungCap->fill([
            'TenNhaCungCap'=>$request->input('tenncc'),
            'DiaChi'=>$request->input('diachincc'),
            'SDT'=>$request->input('sdtncc'),   
        ]);
        $NhaCungCap->save();
        return Redirect::route('NhaCungCap.show',['NhaCungCap'=>$NhaCungCap]);
    }
    public function destroy(Request $request,NhaCungCap $NhaCungCap)
    {
        // dd($SanPham);
        $NhaCungCap->fill([
            'TrangThai'=>$request->input('TrangThai'),
        ]);
        $NhaCungCap->save();
         return Redirect::route('NhaCungCap.index');
    }
    public function create()
    {
        return view('Admin.NhaCungCap_create');
    }
    public function store(Request $request)
    {   
        $NhaCungCap = new NhaCungCap;

        $NhaCungCap->fill([
            'TenNhaCungCap'=>$request->input('tenncc'),
            'DiaChi'=>$request->input('diachincc'),
            'SDT'=>$request->input('sdtncc'),            
            'TrangThai'=>$request->input('TrangThai'),           
        ]);
        $NhaCungCap->save();
        return Redirect::route('NhaCungCap.show',['NhaCungCap'=>$NhaCungCap]);
    }
}
