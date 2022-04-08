@extends('layouts.app-client')
@section('title', 'create')
@section('content')
<div class="container" style="max-width: 600px; margin:auto;">
    <div class="row justify-content-center">
        <div class="col-12">
            <form action="{{ route('search') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control form-control-sm" required/>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg></button>
                    </div>
                </div>
              </form>
                <br>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>KTP</th>
                            <th>Instansi</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @if($bukuTamuDC->isNotEmpty() && $show == true)
                            @foreach($bukuTamuDC as $bukuTamuDC)
                                @if($bukuTamuDC->status=='checkin')
                                    <tr>
                                        <td>{{ $bukuTamuDC->nama }}</td>
                                        <td>{{ $bukuTamuDC->no_ktp }}</td>
                                        <td>{{ $bukuTamuDC->instansi }}</td>
                                        <td>
                                            <a href="{{$bukuTamuDC->id}}/checkout" class="btn btn-success btn-sm" style="border: none; background-color:transparent;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                @endif
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
@extends('layouts.footer')

