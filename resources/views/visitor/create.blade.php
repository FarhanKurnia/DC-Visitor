@extends('layouts.app-client')
@section('title', 'create')
@section('content')
<div class="container" style="max-width: 600px; margin:auto;">
    {{-- menampilkan error validasi --}}
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" value="{{ old('nama') }}" class="form-control" placeholder="Masukan nama lengkap" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nomor KTP</strong>
                    <input type="text" name="no_ktp" value="{{ old('no_ktp') }}"  class="form-control" placeholder="Masukan nomor sesuai KTP yang berlaku" required>
                    @error('no_ktp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Instansi</strong>
                    <input type="text" name="instansi" value="{{ old('instansi') }}"  class="form-control" placeholder="Masukan nama instnasi" required>
                    @error('instansi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nomor Rack</strong>
                    <input type="text" name="no_rack" value="{{ old('no_rack') }}" class="form-control" placeholder="Masukan nomor rack server" required>
                    @error('no_rack')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nomor Slot</strong>
                    <input type="text" name="no_slot" value="{{ old('no_slot') }}"  class="form-control" placeholder="Masukan nomor slot server">
                    @error('no_slot')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-5">
                <div class="form-group">
                    <strong>Pekerjaan</strong>
                    <input type="text" name="pekerjaan" value="{{ old('pekerjaan') }}"  class="form-control" placeholder="Masukan detail pengerjaan yang akan dilakukan">
                    @error('pekerjaan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <input type="hidden" name="status" value="checkin">
            <input type="hidden" name="updated_at" value="">
            <input type="hidden" name="updated" value="">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-danger">Check In</button>
                </div>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection
@extends('layouts.footer')