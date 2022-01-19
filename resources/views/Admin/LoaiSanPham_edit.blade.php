@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <H5>SIDEBAR CON</H5>
@endsection

@section('content')

    <h1>Cập nhật Loại sản phẩm </h1>
    @foreach ($sualoaiSanPham as $lsp)
        <form method="post" action="{{ route('LoaiSanPham.update', ['LoaiSanPham' => $lsp]) }} " enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <label for="">Tên loại sản phẩm: </label><input class="form-control" name="tenloaisp" value="{{ $lsp->TenLoaiSanPham }}"> <br>
            <label for="">Trạng Thái: </label>
            <input  name="TrangThai"class="form-control" value="{{ $lsp->TrangThai }}"> <br> <br>
    <input type="submit" value="Xác nhận">
    </form>
    @endforeach
    

@endsection
