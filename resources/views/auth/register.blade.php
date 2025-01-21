@extends('template.main_template')

@section('title')
    Register
@endsection

@section('content')

<div class="container-fluid mt-5" style="height: 80vh">
    <div class="row">
        <div class="col-md-6 mx-auto pt-5 mt-5">
            <form action="{{ route('register') }}" method="POST" class="form">
                @csrf
                <input type="text" name="name" class="form-control mb-2" id="name" aria-describedby="emailHelp" placeholder="username">
                <input type="email" name="email" class="form-control mb-2" id="email" aria-describedby="emailHelp" placeholder="Email">
                <input type="password" name="password" class="form-control mb-2" id="password" placeholder="Password">
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Konfirmasi Password">
                <button type="submit" class="btn btn-primary form-control mt-5">Sign Up</button>
                <p>Sudah punya akun?
                    <a href="{{route('login')}}" class="text-decoration-none text-black ml-3">
                        login
                    </a>
                </p>
            </form>
        </div>
    </div>
</div>

@endsection