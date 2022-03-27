<link rel="stylesheet" type="text/css" href="/css/style.css">
<script type="text/javascript" src="/js/app.js"></script>

@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                <a href="bukuTamu/create" class="btn btn-primary mb-2">Create Post</a> 
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nomer KTP</th>
                            <th>Instansi</th>
                            <th>Nomor Rack</th>
                            <th>Nomor Slot</th>
                            <th>Pekerjaan</th>
                            <th>Status</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bukuTamuDC as $bukuTamuDC)
                        <tr>
                            <td>{{ $bukuTamuDC->nama }}</td>
                            <td>{{ $bukuTamuDC->no_ktp }}</td>
                            <td>{{ $bukuTamuDC->instansi }}</td>
                            <td>{{ $bukuTamuDC->no_rack }}</td>
                            <td>{{ $bukuTamuDC->no_slot }}</td>
                            <td>{{ $bukuTamuDC->pekerjaan }}</td>
                            <td>{{ $bukuTamuDC->status }}</td>
                            <td>
                            <a href="bukuTamu/{{$bukuTamuDC->id}}" class="btn btn-primary">Show</a>
                            <a href="bukuTamu/{{$bukuTamuDC->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="bukuTamu/{{$bukuTamuDC->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
    </div>
</div>
@endsection