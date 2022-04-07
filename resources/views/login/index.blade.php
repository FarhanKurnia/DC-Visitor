@extends('layouts.app-client')
@section('title', 'Home')
@section('content')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-2 col-md-5 col-lg-5">
            <img src="/assets/home.jpg" class="img-fluid" alt="Responsive image">
            <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
            <div class="form-signin">
                @if(session()->has('loginError'))
                <div class="alert alert-danger allert-dismissable fade show" role="alert">
                    {{session('loginError')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="/login" method="POST">
                    @csrf
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value={{old('email')}}>
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
            
                <button class="w-100 btn btn-lg btn-danger" type="submit">Login</button>
                </form>
                <small>
                    Not Registered? ask admin ok wqwqwq 
                </small>
            </div>
        </div>
</div>
@endsection
@extends('layouts.footer')