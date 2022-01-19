@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <H5>Loại sản phảm</H5>
@endsection

@section('content')

    {{-- <div class="col-lg-6 grid-margin stretch-card"> --}}
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Loại Sản phẩm </h4>
            {{-- <p class="card-description"> Add class <code>.table</code>
      </p> --}}
            <a href="http://127.0.0.1:8000/ThemLoaiSanPham" type="button" class="btn btn-light btn-fw">Thêm Loại Sản
                Phẩm</a><br><br>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Trạng thái</th>

                        </tr>
                    </thead>
                    {{-- <tbody> @for ($i = 1; $i <= 5; $i++) --}}

                    @foreach ($listLoai as $loai)
                        @if ($loai->TrangThai == 1)


                            <tr>
                                <td>
                                    <a href="{{ route('LoaiSanPham.show', ['LoaiSanPham' => $loai]) }}">
                                        {{ $loai->TenLoaiSanPham }}
                                    </a>
                                </td>
                                <td>

                                    @if ($loai->TrangThai == 1)
                                        <a>Còn tác dụng</a>
                                    @endif

                                </td>
                            </tr>

                        @endif
                    @endforeach

                    {{-- @endfor --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- </div> --}}


@endsection
