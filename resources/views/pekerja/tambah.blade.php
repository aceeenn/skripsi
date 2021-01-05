<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Judul Diatas</title>

        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">

    </head>

    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD data Pekerja - <strong>Tambah Data</strong> <a href="https://twitter.com/mangkus_" target="_blank"> twitter saya</a>

                </div>
                <div class="card-body">
                    <a href="/pekerja" class="btn btn-primary">Kembali</a>
                    <br>
                    <br>

                    <form method="POST" action="/pekerja/store">

                        {{csrf_field()}}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Pekerja...">

                            @if ($errors->has('nama'))
                                <div class="text-danger">
                                    {{$errors->first('nama')}}
                                </div>

                            @endif

                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat Pegawai..."></textarea>

                            @if ($errors->has('alamat'))
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