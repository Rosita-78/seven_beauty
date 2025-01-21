@extends('template.admin_template')

@section('title-page')
    Kategori
@endsection

@section('content')
    <div class="container mt-1">
        <div class="row">
            @if ($categories->isEmpty())
                <h3 class="text-center">Tidak ada data</h3>
            @else
                @foreach ($categories as $category)
                <div class="col-md-4">
                    <div class="categori-item text-center">
                        <img src="{{ asset($category->gambar) }}" style="width: 200px; height:150px;" alt="categories Image">
                        <p class="mb-0">{{ $category->name }}</p>
                        <div class="btn-group mb-5 gap-2">
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                @endforeach
            @endif

            <div class="position-sticky bottom-0 bg-light p-3 my-2">
                <div class="text-center">
                    <a href="{{route('categories.create')}}" class="btn btn-danger form-control">Tambah Kategori</a>
                </div>
            </div>
        </div>
    </div>
@endsection