@extends('app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <H5>SIDEBAR CON</H5>
@endsection

@section('content')

    <h1>Điền thông tin sản phẩm</h1>
    
        <form method="post" action="{{ route('SanPham.store') }} " enctype="multipart/form-data">
            @csrf        
            
            <input type="" name="idnhacungcap" value="">
           
            <input type="" name="TrangThai" value="">

            <label for="">Tên sản phẩm: </label><input class="form-control" name="tensp" value=""> <br>

            <label for="">Loại sản phẩm: </label>
            <select class="form-control" name="idloaisanpham" >
                <option value="">----Chọn loại----</option>

                @foreach ($listLoai as $loai)
                    <option value="{{ $loai->id }}" @if ($loai->id == $sp->IdLoaiSanPham)

                @endif>{{ $loai->TenLoaiSanPham }}</option>
    @endforeach
    </select><br>


    <label for="">Giá: </label><input class="form-control" name="gia" value=""> <br>
    <label for="">Size: </label><input name="size" class="form-control"value=""> <br>
    <label for="">Màu: </label><input name="mau"class="form-control" value=""> <br>
    <label for="">Số lượng: </label><input name="soluong"class="form-control" value=""> <br>
    <label for="">Mô tả</label>
    <textarea name="mota" id=""class="form-control" cols="25" rows="5"></textarea> <br>

    <label for="">Hình</label>
    <img style="width: 100px;max-height: 100px;object-fit: contain" src=""><br>
    <input type="file" class="form-control"  name="hinhanh" value=""><br>

    <input type="submit" value="Xác nhận">
    </form>
    

@endsection
