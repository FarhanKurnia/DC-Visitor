@extends('layouts.app-client')
@section('content')
<div class="container" style="max-width: 600px; margin:auto;">
    <div class="card">
    <div class="card-body bg-light">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <strong>Nama</strong>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                {{ $bukuTamuDC->nama }}
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <strong>KTP</strong>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                {{ $bukuTamuDC->no_ktp }}
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <strong>Instansi</strong>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                {{ $bukuTamuDC->instansi }}
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <strong>Rack</strong>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    {{ $bukuTamuDC->no_rack }}
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <strong>Slot</strong>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    {{ $bukuTamuDC->no_slot }}
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <strong>Pekerjaan</strong>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    {{ $bukuTamuDC->pekerjaan }}
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <strong>Status</strong>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    {{ $bukuTamuDC->status }}
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <strong>Check In</strong>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                {{ $bukuTamuDC->created_at->isoFormat('dddd, D MMMM Y')}}
                {{ date_format($bukuTamuDC->created_at,'h:i:s A')}}
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <strong>Check Out</strong>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                @if($bukuTamuDC->updated_at==null)
                    @php
                        echo "-";
                    @endphp
                @else
                    {{$bukuTamuDC->created_at->isoFormat('dddd, D MMMM Y')}}
                    {{date_format($bukuTamuDC->created_at,'h:i:s A')}}
                @endif
            </div>

            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <strong>Durasi</strong>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                @php
                if($bukuTamuDC->updated_at==null){
                    echo "-";
                }else{
                    $create = $bukuTamuDC->created_at;
                    $update = $bukuTamuDC->updated_at;
                    $durasi = $create->diff($update);
                    echo $durasi->format('%i Menit');
                }
                @endphp
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center mb-5 p-3">
        <a href="{{ route('dashboard') }}" class="btn btn-danger btn-sm">Kembali</a>
</div>
</div>
@endsection
@extends('layouts.footer')
