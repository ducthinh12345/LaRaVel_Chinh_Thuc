@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <H5>SIDEBAR CON</H5>
@endsection

@section('content')

    <h1>Danh Sách sản phẩm</h1>
    <a href="{{ route('SanPham.edit',['SanPham'=>$sp]) }}">Sửa</a>

    <form method="POST" action="{{ route('SanPham.destroy',['SanPham'=>$sanPham]) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Xóa</button>
    </form>

    <label for="">Tên sản phẩm: </label>{{ $sanPham->TenSanPham }} <br>
    <label for="">Giá: </label>{{ $sanPham->Gia }} <br>
    <label for="">Size: </label>{{ $sanPham->Size }} <br>
    <label for="">Màu: </label>{{ $sanPham->Mau }} <br>
    <label for="">Số lượng: </label>{{ $sanPham->SoLuong }} <br>
    <label for="">Tên loại sản phẩm</label>{{ $sanPham->loaiSanPham->TenLoaiSanPham }} <br>
    <label for="">Mô tả</label>
    <p>{{ $sanPham->MoTa }}</p>
    <label for="">Hình</label>

    <a href="{{ route('SanPham.create') }}">Thêm</a><br>
    <img   style="width: 100px;max-height: 100px;object-fit: contain" src="{{ $sp->HinhAnh }}">
    
    
@endsection


