@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <H5>SIDEBAR CON</H5>
@endsection

@section('content')

{{-- <h1>{{ $loaiSanPham->TenLoaiSanPham }}</h1> --}}

    @foreach ($listSanPham as $sp)
      <a href="{{ route("SanPham.show",['SanPham'=>$sp]) }}">
        {{ $sp->TenSanPham }}
      </a><br/>
      
    @endforeach

    {{-- @foreach ( $listSanPham as $sp)
    <a href="{{ route('SanPham.show',['SanPham'=>$sp]) }}">
      {{ $sp->TenSanPham }}
    </a><br/> --}}
  {{-- @endforeach --}}
  
    
@endsection


