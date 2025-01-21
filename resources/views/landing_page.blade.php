<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seven Beauty</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    
    <div class="container-sm mb-3">
        <div class="row">
            <div class="col-md-12 ms-auto text-center mt-5">
                <h1>Selamat Datang</h1>
                <img src="{{asset('asset/images/logo.jpg')}}" style="height: 300px" alt="" class="img-fluid mt-2">
                <div class="text-white mt-4">
                    <a href="{{route('login')}}" class="btn bg-danger text-white fs-4 form-control"> Login</a>
                    <a href="{{route('register')}}" class="btn bg-danger text-white fs-4 form-control mt-3"> Register</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>
</html>