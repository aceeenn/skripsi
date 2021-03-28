@extends('skripsi\master')

@section('content')

<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            Edit Data Pengirim

        </div>

        <div class="card-body">
            <a href="/skripsi/pengirim" class="btn btn-primary">Kembali</a>
            <br>          

            <form method="post" action="/updatepengirim/{{$pengirim->id_pengirim}}" enctype="multipart/form-data">
            
            
                {{csrf_field()}}
                {{-- {{method_field('PUT')}} --}}
                
                 @method('PUT')

                <div class="form-group">
                    <label>Nama Pengirim</label>
                    <input class="form-control" type="text" name="nama_pengirim" placeholder="Nama Pengirim" value="{{$pengirim->nama_pengirim}}">

                    @if($errors->has('nama_pengirim'))
                        <div class="text-danger">
                            {{$errors->first('nama_pengirim')}}
                            
                        </div>
                    @endif

                </div>
                
                <div class="form-group">
                    <label>Nama Telpon</label>
                    <input class="form-control" type="text" name="no_telpon" placeholder="No Telpon" value="{{$pengirim->no_telpon}}">

                    @if($errors->has('no_telpon'))
                        <div class="text-danger">
                            {{$errors->first('no_telpon')}}
                            
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat"> {{$pengirim->alamat}}</textarea>

                    @if($errors->has('alamat'))
                        <div class="text-danger">
                            {{$errors->first('alamat')}}

                        </div>

                    @endif
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">

                </div>

            </form>

        </div>

    </div>

</div>
    
@endsection