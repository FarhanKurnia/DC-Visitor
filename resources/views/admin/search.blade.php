@extends('layouts.app')
@section('title', 'Search')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xs-4 col-sm-12 col-md-12 col-lg-12">
            <form action="{{ route('searchindex') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-sm" name="search" required/>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-danger btn-sm">Search</button>
                        <a href="check-in" class="btn btn-success btn-sm">Check In</a>
                    </div>
                </div>
              </form>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>KTP</th>
                            <th>Instansi</th>
                            <th>Status</th>
                            <th>Waktu</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = '1';
                        @endphp
                        @if($bukuTamuDC->isNotEmpty())
                            @foreach($bukuTamuDC as $visitor)
                            <tr>
                                <td>{{ $no++}}</td>
                                <td>{{ $visitor->nama }}</td>
                                <td>{{ $visitor->no_ktp }}</td>
                                <td>{{ $visitor->instansi }}</td>
                                <td>{{ $visitor->status }}</td>
                                <td>{{ $visitor->created_at->isoFormat('dddd, D MMMM Y')}}</td>
                                </td>
                                <td>
                                <a href="{{$visitor->id}}/show" class="btn btn-primary btn-sm" style="border: none; background-color:transparent;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                </svg></a>
                                <a href="{{$visitor->id}}/edit" class="btn btn-success btn-sm" style="border: none; background-color:transparent;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg></a>
                                <form method="POST" action="{{$visitor->id}}/delete" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit" style="border: none; background-color:transparent;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg></button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        @else
                        <tr>
                            <tr>
                                <td colspan="5" style="text-align:center;">Data tidak ditemukan</th>
                            </tr>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
