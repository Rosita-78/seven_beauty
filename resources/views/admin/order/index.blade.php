@extends('template.admin_template')

@section('title-page')
    Order
@endsection

@section('content')
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
            @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>{{$order->customer_name}}</td>
                    <td>{{$order->customer_email}}</td>
                    <td>{{$order->customer_address}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->total_price}}</td>
                    <td>{{$order->status}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection