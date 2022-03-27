@extends('layouts.app')
@section('title', 'create')
@section('content')
<div class="container" style="max-width: 600px; margin:auto;">
        <form action="{{ url('DC-Visitor/store') }}" method="POST">
            @csrf
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Nama</strong>
                        <input type="text" name="nama" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Nomor KTP</strong>
                        <input type="text" name="no_ktp" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Instansi</strong>
                        <input type="text" name="instansi" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Nomor Rack</strong>
                        <input type="text" name="no_rack" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Nomor Slot</strong>
                        <input type="text" name="no_slot" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 mb-5">
                    <div class="form-group">
                        <strong>Pekerjaan</strong>
                        <input type="text" name="pekerjaan" class="form-control" placeholder="">
                    </div>
                </div>
                <input type="hidden" name="status" value="checkin">

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-danger">Check In</button>
                </div>
            </div>

        </form>
</div>
@endsection
