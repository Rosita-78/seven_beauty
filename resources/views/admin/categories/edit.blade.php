@extends('template.admin_template')

@section('title-page')
    Kategori
@endsection

@section('content')
    <div class="container-md mt-3">
        <div class="row">
            <div class="col-md-6 mx-auto mb-3">
                <div class="card">
                    <h1 class="card-header mx-auto">Ubah Data categories</h1>
                    <div class="card-body">
                        <div class="col-md-6 mx-auto">
                            <img class="img img-thumbnail offset-1 bg-dark" src="{{ asset($category->gambar) }}" style="width: 200px" alt="categories Image">
                        </div>
                        <form action="{{route('categories.update', $category)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-item">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" name="name" id="name" class="form-control" required value="{{$category->name}}">
                            </div>
                            <div class="form-item">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" name="gambar" id="gambar" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success form-control mt-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection