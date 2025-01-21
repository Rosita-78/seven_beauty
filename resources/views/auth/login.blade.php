@extends('template.main_template')

@section('title')
    Sign In
@endsection

@section('content')

<div class="container-fluid mt-5" style="height: 80vh">
    <div class="row">
        <div class="col-md-6 mx-auto pt-5 mt-5">
            <form action="{{ route('login') }}" method="POST" class="form">
                @csrf
                <input type="email" name="email" class="form-control mb-2" id="email" aria-describedby="emailHelp" placeholder="Email">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                {{-- <a href="route('forgot-password')" class="text-decoration-none text-black ml-3">
                    <p class="fs-6">forgot your password?</p>
                </a> --}}
                
                <button type="submit" class="btn btn-primary form-control mt-5">Submit</button>
                <p>Need an account?
                    <a href="{{route('register')}}" class="text-decoration-none text-black ml-3">
                        create new account
                    </a>
                </p>
            </form>
        </div>
    </div>
</div>

@endsection