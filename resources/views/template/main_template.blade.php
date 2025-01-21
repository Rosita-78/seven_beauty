<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seven Beauty</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body style="background-color: rgb(234, 167, 167)">
    
    <header>
        
        <div class="container-fluid pt-2">
            <div class="row">
                <div class="col-md-12 p-0">
                    <ul style="list-style-type: none"> 
                        <li class="float-start">
                            <a href="{{ url()->previous() }}">
                                <img src="{{asset('asset/icons/back.png')}}" alt="" style="width:30px">
                            </a>
                        </li>
                        <li>
                            <div class="page-title text-center w-100">
                                <h3>@yield('title')</h3>
                            </div>
                        </li>
                    </ul>      
                </div>
            </div>
        </div>
    </header>
    <main style="width: 100%">
        @yield('content')
    </main>

    @yield('script')

    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>
</html>