@extends('template.admin_template')

@section('title-page')
    Kategori
@endsection

@section('content')
    <h3 class="text-center mt-5">Tambah Kategori</h3>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <div class="card mt-5">
                    <div class="card-body">
                        <form action="{{route('categories.store')}}" class="form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="gambar" class="form-label">Nama Kategori</label>
                                <input type="text" name="name" class="form-control" placeholder="Nama Kategori" required>
                            </div>
                            <div class="form-group mt-2">
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