@extends('layouts.app-client')
@section('title', 'home')
@section('content')
<div class="container" style="max-width: 600px; margin:auto;">
    <div class="row justify-content-center">
        <div class="col-sm">
            <img src="/assets/home.jpg" class="img-fluid" alt="Responsive image">
        </div>
    </div>
    {{-- menampilkan error validasi --}}
    @if (count($errors) > 0)
    <div class="alert alert-success">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-sm">
            <p class="lead text-center">Welcome to Citranet Data Centers</p>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="check-in" class="btn btn-danger btn-lg btn-block">Check In</a>
            <a href="search" class="btn btn-danger btn-lg btn-block">Check Out</a>
            <br>
            <br>
            <small><a href="/login">Login </a> to Dashboard</small>
        </div>
    </div>
</div>
@endsection
@extends('layouts.footer')
