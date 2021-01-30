<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tambah Barang</title>

        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">

    </head>

    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   <strong>Tambah Data Barang</strong>

                </div>
                <div class="card-body">
                    <a href="/skripsi/barang" class="btn btn-primary">Kembali</a>
                    <br>
                    <br>

                    <form method="POST" action="/skripsi/store_barang">

                        {{csrf_field()}}

                        <div class="form-group">
                            <label>Id Barang</label>
                            <input type="text" name="id_barang" class="form-control" placeholder="Id barang...">

                            @if ($errors->has('id_barang'))
                                <div class="text-danger">
                                    {{$errors->first('id_barang')}}
                                </div>

                            @endif

                        </div>

                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" name="jenis_barang" class="form-control" placeholder="Nama barang...">

                            @if ($errors->has('jenis_barang'))
                                <div class="text-danger">
                                    {{$errors->first('jenis_barang')}}
                                </div>

                            @endif

                        </div>

                        <div class="form-group">
                            <label>Berat Barang</label>
                            <input type="text" name="berat_barang" class="form-control" placeholder="Berat Barang...">

                            @if ($errors->has('berat_barang'))
                                <div class="text-danger">
                                    {{$errors->first('berat_barang')}}
                                </div>

                            @endif

                        </div>

                        <div class="form-group">
                            <label>Panjang Barang</label>
                            <input type="text" name="panjang_barang" class="form-control" placeholder="Panjang Barang...">

                            @if ($errors->has('panjang_barang'))
                                <div class="text-danger">
                                    {{$errors->first('panjang_barang')}}

                                </div>

                            @endif

                        </div>

                        <div class="form-group">
                            <label>Lebar Barang</label>
                            <input type="text" name="lebar_barang" class="form-control" placeholder="Lebar Barang...">

                            @if ($errors->has('lebar_barang'))
                                <div class="text-danger">
                                    {{$errors->first('lebar_barang')}}

                                </div>

                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tinggi Barang</label>
                            <input type="text" name="tinggi_barang" class="form-control" placeholder="Tinggi Barang...">

                            @if ($errors->has('tinggi_barang'))
                                <div class="text-danger">
                                    {{$errors->first('tinggi_barang')}}

                                </div>

                            @endif

                        </div>

                        <div class="form-group">
                            <label>Berat Barang</label>
                            <input type="text" name="berat_barang" class="form-control" placeholder="Berat Barang...">

                            @if ($errors->has('berat_barang'))
                                <div class="text-danger">
                                    {{$errors->first('berat_barang')}}

                                </div>

                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jumlah Barang</label>
                            <input type="text" name="jumlah_barang" class="form-control" placeholder="Jumlah Barang...">

                            @if ($errors->has('jumlah_barang'))
                                <div class="text-danger">
                                    {{$errors->first('jumlah_barang')}}

                                </div>

                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tanggal Pengiriman</label>
                            <input type="date" name="tanggal_pengiriman" class="form-control" placeholder="Tanggal Pengiriman...">

                            @if ($errors->has('tanggal_pengiriman'))
                                <div class="text-danger">
                                    {{$errors->first('tanggal_pengiriman')}}

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