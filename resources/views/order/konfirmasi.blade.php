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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">address</th>
                            <th scope="col">quantity</th>
                            <th scope="col">total price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$order->customer_name}}</td>
                            <td>{{$order->customer_email}}</td>
                            <td>{{$order->customer_address}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->total_price}}</td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" id="pay-button">Bayar</button>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
      window.snap.pay('{{$snapToken}}', {
        onSuccess: function(result){
          /* You may add your own implementation here */
          return location.replace("{{route('invoice', $order)}}");
        },
        onPending: function(result){
          /* You may add your own implementation here */
          console.log('pending');
          console.log(result);
        },
        onError: function(result){
          /* You may add your own implementation here */
          console.log('gagal');
          console.log(result);
        }
      });
      // customer will be redirected after completing payment pop-up
    });
  </script>
@endsection