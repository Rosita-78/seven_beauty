@extends('template.admin_template')

@section('title-page')
    Products
@endsection

@section('content')
    <div class="container-md mt-3">
        <div class="row">
            <div class="col-md-6 mx-auto mb-3">
                <div class="card">
                    <h1 class="card-header mx-auto">Ubah Data Produk</h1>
                    <div class="card-body">
                        <div class="col-md-6 mx-auto">
                            <img class="img img-thumbnail offset-1 bg-dark" src="{{ asset($product->gambar) }}" style="width: 200px" alt="categories Image">
                        </div>
                        <form action="{{route('product.update', $product)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-2">
                                <label for="gambar" class="form-label">Nama Produk</label>
                                <input type="text" name="name" class="form-control" placeholder="Nama Produk" value="{{$product->name}}" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="gambar" class="form-label">Harga Produk</label>
                                <input type="numbers" name="harga" class="form-control" placeholder="Harga Produk" value="{{$product->harga}}" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="gambar" class="form-label">Kategori Produk</label>
                                <select name="kategori" id="kategori" class="form-select" required>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group  mb-2">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" name="gambar" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success form-control mt-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection