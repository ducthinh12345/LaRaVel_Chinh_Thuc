@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <H5>SIDEBAR CON</H5>
@endsection

@section('content')
    @foreach ($listLoai as $loai)
      <a href="{{ route('LoaiSanPham.show',['LoaiSanPham'=>$loai]) }}">
        {{ $loai->TenLoaiSanPham }}
      </a><br/>
    @endforeach
    
@endsection


