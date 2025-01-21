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
<div class="row">
    <h3 class="offset-1 mt-5">Kategori</h3>
    @foreach ($categories as $category)
    <div class="col-md-4">
        <div class="categori-item text-center">
            <img src="{{ asset($category->gambar) }}" style="width: 200px; height:150px;" alt="categories Image">
            <p class="mb-0">{{ $category->name }}</p>
        </div>
     </div>
    
    @endforeach
    <h3 class="offset-1 mt-5">Produk</h3>
    @foreach ($Products as $product)
    <div class="col-md-4">
        <div class="categori-item text-center">
            <a href="{{ route('product.show', $product->id) }}" class="text-decoration-none fw-bold text-dark">
                <img src="{{ asset($product->gambar) }}" style="width: 200px; height:150px;" alt="product Image">
                <p class="mb-0">{{ $product->name }}</p>
                <p class="mb-0">RP. {{ number_format($product->harga, '0', ',', '.') }}</p>
            </a>
        </div>
     </div>
    
    @endforeach
    <div class=" p-3 my-5">
        <div class="text-center">
            <form action="{{route('logout')}}" method="POST" class="form">
                @csrf
                <button class="btn btn-danger text-white fw-bold fs-4 form-control" type="submit">Logout</button>
            </form>
        </div>
    </div>
@endsection