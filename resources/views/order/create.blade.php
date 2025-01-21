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
            <div class="col-md-8 mx-auto">
            <form action="{{route("order.store")}}" class="form" method="POST">
                @csrf
                <div class="form-group">
                    <label for="customer_name" class="form-label">Nama</label>
                    <input type="text" name="customer_name" class="form-control" placeholder="Inputkan nama anda" required>
                </div>
                <div class="form-group mt-2">
                    <label for="customer_email" class="form-label">Email</label>
                    <input type="email" name="customer_email" class="form-control" placeholder="Inputkan nama anda" required>
                </div>
                <div class="form-group mt-2">
                    <label for="customer_name" class="form-label">Alamat</label>
                    <textarea name="customer_address" id="customer_address" class="form-control" cols="50" rows="3"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <img-group>
                        <img src="{{ asset($product->gambar) }}" alt="" class="img img-thumbnail mt-3" style="width: 200px">
                        <span class="fs-1">
                            {{$product->name}}
                        </span>
                    </img-group>
                    <h3 class="mt-3">Rp. {{ number_format($product->harga, '0', '', '.') }}</h3>
                </div>
            </div>
            <div class="form-group mt-2">
                <input type="hidden" name="quantity" value="1">
            </div>
            <div class="form-group mt-2">
                <input type="hidden" name="total_price" value="{{$product->harga}}">
            </div>
                <button class="form-control btn btn-primary my-3" type="submit">Bayar</button>
            </form>
            </div>
        </div>
    </div>
@endsection
