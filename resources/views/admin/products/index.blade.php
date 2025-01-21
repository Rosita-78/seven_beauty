@extends('template.admin_template')

@section('title-page')
    Products
@endsection

@section('content')
<div class="row">
    @if ($products->isEmpty())
        <h3 class="text-center">Tidak ada data</h3>
    @else
        @foreach ($products as $product)
        <div class="col-md-4">
            <div class="categori-item">
                <div class="card mt-2 mx-auto">
                    <div class="card-body">
                        <img src="{{ asset($product->gambar) }}" style="width: 100%; height:150px;" alt="products Image">
                        <p class="mb-0">{{ $product->name }}</p>
                        <p class="mb-0">{{ $product->harga }}</p>
                        <p class="mb-0">{{ $product->jumlah_dipesan }}</p>
                        <div class="btn-group mb-5 gap-2">
                            <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                <span>
                                    <img src="{{asset('asset/icons/edit.png')}}" alt="" style="width: 16px">
                                </span>
                                Edit
                            </a>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                    <span><img src="{{asset('asset/icons/delete.png')}}" style="width: 16px" alt=""></span>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif
    <div class="position-sticky bottom-0 bg-light p-3 my-2">
        <div class="text-center">
            <a href="{{route('product.create')}}" class="btn btn-danger form-control">Tambah Produk</a>
        </div>
    </div>
</div>
</div>

@endsection