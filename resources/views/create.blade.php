@extends('layouts.app')
@section('title', 'create')
@section('content')
<div class="container" style="max-width: 600px; margin:auto;">
        <form action="#" method="POST">
            @csrf
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                    <div class="form-group">
                        <strong>Nama</strong>
                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-2">
                    <div class="form-group">
                        <strong>No. ktp:</strong>
                        <input type="text" name="NamaSiswa" class="form-control" placeholder="NAMA SISWA">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                    <div class="form-group">
                        <strong>Alamat:</strong>
                        <textarea class="form-control" style="height:150px" name="Alamat" placeholder="Content"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>
</div>
@endsection
