@extends('layouts.app-client')
@section('title', 'home')
@section('content')
<div class="container" style="max-width: 600px; margin:auto;">
    <div class="row justify-content-center">
        <div class="col-sm">
            <img src="/assets/home.jpg" class="img-fluid" alt="Responsive image">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm">
            <p class="lead text-center">Welcome to Citranet Data Centers</p>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="check-in" class="btn btn-danger btn-lg btn-block">Check In</a>
            <a href="check-out" class="btn btn-danger btn-lg btn-block">Check Out</a>
        </div>
    </div>
</div>
@endsection
