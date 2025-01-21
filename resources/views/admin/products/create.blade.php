@extends('template.admin_template')


@section('title-page')
    Products
@endsection

@section('content')
    <h3 class="text-center mt-5">Tambah Produk</h3>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="{{route('product.store')}}" class="form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="gambar" class="form-label">Nama Produk</label>
                                <input type="text" name="name" class="form-control" placeholder="Nama Produk" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="gambar" class="form-label">Harga Produk</label>
                                <input type="numbers" name="harga" class="form-control" placeholder="Harga Produk" required>
                            </div>
                            <div class="form-group mb-2">
                                <input type="hidden" name="jumlah_dipesan" class="form-control" value="0">
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
                            <button class="btn btn-primary mt-1 form-control" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection