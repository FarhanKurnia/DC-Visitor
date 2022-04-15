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
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <!-- form  -->
    {{-- <form id="form"> --}}
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nama</strong>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="form-control" placeholder="Masukan nama lengkap" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nomor KTP</strong>
                    <input type="text" name="no_ktp" id="no_ktp" value="{{ old('no_ktp') }}"  class="form-control" placeholder="Masukan nomor sesuai KTP yang berlaku" required>
                    @error('no_ktp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Instansi</strong>
                    <input type="text" name="instansi" id="instansi" value="{{ old('instansi') }}"  class="form-control" placeholder="Masukan nama instnasi" required>
                    @error('instansi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nomor Rack</strong>
                    <input type="text" name="no_rack" id="no_rack" value="{{ old('no_rack') }}" class="form-control" placeholder="Masukan nomor rack server" required>
                    @error('no_rack')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nomor Slot</strong>
                    <input type="text" name="no_slot" id="no_slot" value="{{ old('no_slot') }}"  class="form-control" placeholder="Masukan nomor slot server">
                    @error('no_slot')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Pekerjaan</strong>
                    <input type="text" name="pekerjaan" id="pekerjaan" value="{{ old('pekerjaan') }}"  class="form-control" placeholder="Masukan detail pengerjaan yang akan dilakukan">
                    @error('pekerjaan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            {{-- Upload Field
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Upload Foto</strong>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="foto" id="foto">
                </div>
            </div> --}}

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3 text-center">
                <div id="my_camera" style="margin:auto"></div>
                <br/>
                <input type=button class="btn btn-sm btn-primary" value="Take Snapshot" onClick="take_snapshot()">
                <input type="hidden"  name="image" class="image-tag">
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 mb-5 text-center">
                <div id="results">Hasil foto yang ditangkap akan muncul disini...</div>
            </div>

            <input type="hidden" name="status" id="status" value="checkin">
            <input type="hidden" name="updated_at" id="updated_at" value="">
            <input type="hidden" name="updated" id="updated" value="">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-danger">Check In</button>
                </div>
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- jquery  -->
<script src="https://code.jquery.com/jquery-3.5.1.js"
integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
</script>
<!-- bootstrap js  -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
</script>
<!-- webcamjs  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>
{{-- <script src="{{ asset('js/webcamjs-master/webcam.min.js') }}" defer></script> --}}
<script language="JavaScript">
// menampilkan kamera dengan menentukan ukuran, format dan kualitas
Webcam.set({
    width: 320,
    height: 240,
    image_format: 'jpeg',
    jpeg_quality: 90
});

//menampilkan webcam di dalam file html dengan id my_camera
    Webcam.attach( '#my_camera' );
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
@endsection
