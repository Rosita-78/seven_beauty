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
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Customer Email</th>
                            <th scope="col">Customer Address</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{$orders->id}}</th>
                            <td>{{$orders->customer_name}}</td>
                            <td>{{$orders->customer_email}}</td>
                            <td>{{$orders->customer_address}}</td>
                            <td>{{$orders->quantity}}</td>
                            <td>{{$orders->total_price}}</td>
                            <td>{{$orders->status}}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{route('dashboard')}}" class="btn btn-danger">Kembali Ke Beranda</a>
            </div>
        </div>
    </div>

@endsection