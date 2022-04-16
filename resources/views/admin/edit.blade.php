@extends('layouts.app')
@section('title', 'Edit')
@section('content')
<div class="container" style="max-width: 600px; margin:auto;">
    <form action="{{ url('/'.$bukuTamuDC->id.'/update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nama</strong>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $bukuTamuDC->nama) }}" required>
                            <!-- error message untuk title -->
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nomor KTP</strong>
                        <input type="text" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" value="{{ old('no_ktp', $bukuTamuDC->no_ktp) }}" required>
                            <!-- error message untuk title -->
                            @error('no_ktp')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Instansi</strong>
                        <input type="text" class="form-control @error('instansi') is-invalid @enderror" name="instansi" value="{{ old('instansi', $bukuTamuDC->instansi) }}" required>
                            <!-- error message untuk title -->
                            @error('instansi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nomor Rack</strong>
                        <input type="text" class="form-control @error('no_rack') is-invalid @enderror" name="no_rack" value="{{ old('no_rack', $bukuTamuDC->no_rack) }}" required>
                            <!-- error message untuk title -->
                            @error('no_rack')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nomor Slot</strong>
                        <input type="text" class="form-control @error('no_slot') is-invalid @enderror" name="no_slot" value="{{ old('no_slot', $bukuTamuDC->no_slot) }}" required>
                            <!-- error message untuk title -->
                            @error('no_slot')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Pekerjaan</strong>
                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ old('pekerjaan', $bukuTamuDC->pekerjaan) }}" required>
                            <!-- error message untuk title -->
                            @error('pekerjaan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Status</strong>
                    <select name="status" class="form-control" disabled>
                        <option value="checkin" {{ $bukuTamuDC->status == 'checkin' ? 'selected':'' }}>Check In</option>
                        <option value="checkout" {{ $bukuTamuDC->status == 'checkout' ? 'selected':'' }}>Check Out</option>
                    </select>
                </div>
            </div>
            <input type="hidden" name="updated_at" value="">
            <input type="hidden" name="updated" value="">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger">Update</button>
            </div>
        </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- include summernote js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection