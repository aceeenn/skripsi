<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

    <title>Judul Diatas</title>

</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD data Pekerja 

            </div>

            <div class="card-body">
                <a href="/pekerja" class="btn btn-primary">Kembali</a>
                <br>          

                <form method="post" action="/pekerja/update/{{$pekerja->id}}">
                
                
                    {{csrf_field()}}
                    {{method_field('PUT')}}

                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" type="text" name="nama" placeholder="Nama Pekerja..." value="{{$pekerja->nama}}">

                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{$errors->first('nama')}}
                                
                            </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat Pekerja..."> {{$pekerja->alamat}}</textarea>

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
    
</body>
</html>