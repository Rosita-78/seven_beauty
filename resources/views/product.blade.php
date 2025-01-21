@extends('template.home_template')

@section('header')
    <div class="container-sm mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="w-100 d-flex justify-content-center align-items-center">
                    <img src="{{asset('asset/images/logo.jpg')}}" alt="" style="width: 50%; height: 30vh">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="{{ asset($product->gambar) }}" alt="" class="img img-thumbnail mt-3" style="width: 300px">
                <h3 class="mt-3">Rp. {{ number_format($product->harga, '0', '', '.') }}</h3>
                <h3 class="mt-2">{{$product->name}}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center my-2">
                <a href="#" class="btn btn-danger">+ keranjang</a>
                <a href="{{route("order.create_with_product", $product)}}" class="btn btn-danger">Bayar Sekarang</a>
            </div>
        </div>
    </div>
@endsection