@extends('skripsi\master')

@section('content')

<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            Edit Data Penerima

        </div>

        <div class="card-body">
            <a href="/skripsi/penerima" class="btn btn-primary">Kembali</a>
            <br>          

            <form method="post" action="/updatepenerima/{{$penerima->id_penerima}}" enctype="multipart/form-data">
            
            
                {{csrf_field()}}
                {{-- {{method_field('PUT')}} --}}
                
                @method('PUT')

                <div class="form-group">
                    <label>Nama Penerima</label>
                    <input class="form-control" type="text" name="nama_penerima" placeholder="Nama Penerima" value="{{$penerima->nama_penerima}}">

                    @if($errors->has('nama_penerima'))
                        <div class="text-danger">
                            {{$errors->first('nama_penerima')}}
                            
                        </div>
                    @endif

                </div>
                
                <div class="form-group">
                    <label>Nama Telpon</label>
                    <input class="form-control" type="text" name="no_telpon" placeholder="No Telpon" value="{{$penerima->no_telpon}}">

                    @if($errors->has('no_telpon'))
                        <div class="text-danger">
                            {{$errors->first('no_telpon')}}
                            
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat">{{$penerima->alamat}}</textarea>

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