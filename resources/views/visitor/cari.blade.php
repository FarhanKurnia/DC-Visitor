@extends('layouts.app-client')
@section('title', 'create')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="form-group">
                <input type="text" class="form-controller" id="cari" name="cari"></input>
            </div>

                <br>
                <table class="table table-striped">
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
                    </tbody>
                </table>
                <script type="text/javascript">
                    $('#cari').on('keyup',function(){
                        $value=$(this).val();
                        $.ajax({
                            type : 'get',
                            url : '"{{ route('cari') }}"',
                            data:{'cari':$value},
                            success:function(data){
                                $('tbody').html(data);
                            }
                        });
                    })
                </script>
                <script type="text/javascript">
                    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
                </script>
            </div>
        </div>
    </div>
</div>
@endsection