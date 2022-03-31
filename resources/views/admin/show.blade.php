@extends('layouts.app-client')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{ $bukuTamuDC->nama }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.index') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $bukuTamuDC->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No KTP:</strong>
                {{ $bukuTamuDC->no_ktp }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Instansi:</strong>
                {{ $bukuTamuDC->instansi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Rack:</strong>
                {{ $bukuTamuDC->no_rack }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Slot:</strong>
                {{ $bukuTamuDC->no_slot }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pekerjaan:</strong>
                {{ $bukuTamuDC->pekerjaan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{ $bukuTamuDC->status }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu Check in:</strong>
                {{ date_format($project->created_at, 'jS M Y') }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu Check out:</strong>
                {{ date_format($project->updated_at, 'jS M Y') }}
            </div>
        </div>
    </div>
@endsection