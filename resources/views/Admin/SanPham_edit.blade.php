@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <H5>SIDEBAR CON</H5>
@endsection

@section('content')

    <h1>Cập nhật sản phẩm</h1>
    

    <form method="POST" action="{{ route('SanPham.update',['SanPham'=>$sanPham]) }} " enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <button type="submit">Xóa</button>
    </form>

    <label for="">Tên sản phẩm: </label><input name="tensp" value="{{ $sanPham->TenSanPham }}"> <br>

    <select name="loaisp" >
        <option value="">--Chọn loại--</option>

        @foreach ($listLoai as $loai)
            <option value="{{ $loai->id }}"@if ($loai->id==$sanPham->IdLoaiSanPham)
                
            @endif>{{ $loai->TenLoaiSanPham }}</option>
        @endforeach
    </select><br>

    <label for="">Giá: </label><input name="gia" value="{{ $sanPham->Gia}}"> <br>
    <label for="">Size: </label><input name="size" value="{{ $sanPham->Size }}"> <br>
    <label for="">Màu: </label><input name="mau" value="{{ $sanPham->Mau }}"> <br>
    <label for="">Số lượng: </label><input name="soluong" value="{{ $sanPham->SoLuong }}"> <br>
   
    <label for="">Mô tả</label>
    <textarea name="mota" id="" cols="30" rows="10">{{ $sanPham->MoTa }}</textarea>
    <label for="">Hình</label>


    <img   style="width: 100px;max-height: 100px;object-fit: contain" src="{{ $sp->HinhAnh }}">
    <input type="file" accept="../../asseets/images/*" name="hinhanh">
    <input type="submit" name="" id="">
    
@endsection


