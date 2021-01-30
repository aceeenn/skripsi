<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tambah Penerima</title>

        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">

    </head>

    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   <strong>Tambah Data Pengirim</strong>

                </div>
                <div class="card-body">
                    <a href="/skripsi/pengirim" class="btn btn-primary">Kembali</a>
                    <br>
                    <br>

                    <form method="POST" action="/skripsi/store_pengirim">

                        {{csrf_field()}}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_pengirim" class="form-control" placeholder="Nama Pengirim...">

                            @if ($errors->has('nama_pengirim'))
                                <div class="text-danger">
                                    {{$errors->first('nama_pengirim')}}
                                </div>

                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nomor Telepon</label>
                            <input type="text" name="no_telpon" class="form-control" placeholder="Nomor Telepon...">

                            @if ($errors->has('no_telpon'))
                                <div class="text-danger">
                                    {{$errors->first('no_telpon')}}
                                </div>

                            @endif

                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat Pengirim..."></textarea>

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