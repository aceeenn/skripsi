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
                   <strong>Tambah Data Penerima</strong>

                </div>
                <div class="card-body">
                    <a href="/skripsi/penerima" class="btn btn-primary">Kembali</a>
                    <br>
                    <br>

                    <form method="POST" action="/skripsi/store_penerima">

                        {{csrf_field()}}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_penerima" class="form-control" placeholder="Nama Penerima...">

                            @if ($errors->has('nama_penerima'))
                                <div class="text-danger">
                                    {{$errors->first('nama_penerima')}}
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
                            <textarea name="alamat" class="form-control" placeholder="Alamat Penerima..."></textarea>

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