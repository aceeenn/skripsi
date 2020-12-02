<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Pegawai</title>

    <link rel="stylesheet" href="{{asset("./css/app.css")}}">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <strong>Tambah Data Pegawai</strong> 
                    </div>

                    <div class="card-body">
                        <h3 class="text-center">Input Data Pegawai</h3>

                        {{-- menampilkan validasi error --}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>

                            </div>
                        @endif

                        {{-- form validasi --}}
                        <form action="/pegawai/proses" method="POST">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" type="text" name="nama" placeholder="Nama..." value="{{old ('nama')}}">

                            </div>
                            <div class="form-group">
                                <label for="pegawai_jabatan">Jabatan</label>
                                <input class="form-control" type="text" name="jabatan" placeholder="Jabatan..." value="{{old ('jabatan')}}">

                            </div>
                            <div class="form-group">
                                <label for="pegawai_umur">Umur</label>
                                <input class="form-control" type="number" name="umur" placeholder="Umur..." value="{{old ('umur')}}">

                            </div>
                            <div class="form-group">
                                <label for="pegawai_alamat">Alamat</label>
                                <input class="form-control" type="textarea" name="alamat" placeholder="Alamat..." value="{{old ('alamat')}}">

                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Tambah">

                            </div>
                        
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
    
</body>

</html>