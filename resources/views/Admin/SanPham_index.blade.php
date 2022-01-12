@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <H5>SIDEBAR CON</H5>
@endsection

@section('content')

    <h1>Danh Sách sản phẩm</h1>

    <a href="{{ route('SanPham.create') }}">Thêm</a><br>
    
    {{-- @foreach ($SanPham as $sp) --}}
      
      {{-- <img   style="width: 100px;max-height: 100px;object-fit: contain" src="{{ $listSanPham->HinhAnh }}"> --}}
      {{-- <a href="{{ route('SanPham.show',['SanPham'=>$SanPham]) }}">{{ $SanPham->TenSanPham }}</a>
      <a href="{{ route('SanPham.edit',['SanPham'=>$SanPham]) }}">Sửa</a> --}} 
    {{-- @endforeach --}}
    {{-- <a href="#">{{ $listSanPham->TenSanPham }}</a> --}}
    {{-- <img src="{{ $listSanPham->HinhAnh }}" alt=""> --}}

    @foreach ($listSanPham as $sp)
      <a href="#">{{ $sp->TenSanPham }}</a>
    @endforeach

    {{ $listSanPham }}
@endsection 





