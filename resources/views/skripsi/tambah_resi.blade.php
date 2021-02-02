<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tambah Resi</title>

        <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css')}}">

    </head>

    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   <strong>Tambah Data Resi</strong>

                </div>
                <div class="card-body">
                    <a href="/skripsi" class="btn btn-primary">Kembali</a>
                    <br>
                    <br>

                    <form method="POST" action="/skripsi/store_resi">

                        {{csrf_field()}}

                        <div class="form-group">
                            

                            <form>
                                <div class="row">
                                    <div class="col">
                                        <label>Nama Pengirim</label>
                                        
                                        <select class="form-control">
                                            @foreach ($pengirim as $item)
                                        <option value="{{$item->id_pengirim}}">{{$item->nama_pengirim}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label>Nama Penerima</label>
                                            <select class="form-control">
                                                @foreach ($penerima as $item)
                                            <option value="{{$item->id_penerima}}">{{$item->nama_penerima}}</option>
                                                    
                                                @endforeach
                                            </select>
                                    </div>
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

                                <div class="row">
                                    <div class="col">
                                        <label>Nama Kapal</label>
                                        <input type="text" name="nama_kapal" class="form-control" placeholder="Nama Kapal...">
                                    </div>

                                    <div class="col">
                                        <label>Tanggal Kapal</label>
                                        <input type="date" name="tanggal_kapal" class="form-control" placeholder="Tanggal Kapal...">       
                                               
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <label>Tanggal Sandar</label>
                                        <input type="date" name="tanggal_sandar" class="form-control" placeholder="Tanggal Sandar...">
                                    </div>

                                    <div class="col">
                                        <label>Tanggal Antar Barang</label>
                                        <input type="date" name="tanggal_antar" class="form-control" placeholder="Tanggal Antar...">       
                                               
                                    </div>
                                </div>
                                
                            </form>
                            <br>

                            <div class="datagrid-view">
                                    {{-- <form method="POST" id="post">
                                        <span id="result"></span>
                                    </form> --}}

                                <table class="table table-bordered table-striped" id="table_barang">
                                    <thead>
                                      <tr>
                                          <th>Nama Barang</th>
                                          <th>Berat Barang</th>
                                          <th>Panjang Barang</th>
                                          <th>Lebar Barang</th>
                                          <th>Tinggi Barang</th>
                                          <th>Jumlah Barang</th>
                                          <th colspan="2">Opsi</th>
                                        </tr>
                                        <input type="submit" class="btn btn-primary" value="Add">
                                        
                                        <br>

                                    </thead>
                                    <br>
                                    <tbody>
                                        <tr>
                                            <th>
                                                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
                                            </th>
                                            <th>
                                                <input type="text" name="berat_barang" class="form-control" placeholder="Berat Barang">
                                            </th>
                                            <th>
                                                <input type="text" name="panjang_barang" class="form-control" placeholder="Panjang Barang">
                                            </th>
                                            <th>
                                                <input type="text" name="lebar_barang" class="form-control" placeholder="Lebar Barang">
                                            </th>
                                            <th>
                                                <input type="text" name="tinggi_barang" class="form-control" placeholder="Tinggi Barang">
                                            </th>
                                            <th>
                                                <input type="text" name="jumlah_barang" class="form-control" placeholder="Jumlah Barang">
                                            </th>
                                            <th>
                                                <a href="/penerima/edit/" class="btn btn-sm btn-warning">Edit</a>
                                                |
                                                <a href="/penerima/hapus/" class="btn btn-sm btn-danger">Hapus</a>
                                            </th>

                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <td>
                                            
                                            <div class="form-group">
                                                
                                                {{-- <input type="submit" class="btn btn-primary" value="Add">
                                                <input type="submit" class="btn btn-danger" value="Remove"> --}}
                                                <input type="submit" class="btn btn-success" value="Simpan">
                    
                                            </div>

                                        </td>
                             
                                    </tfoot>
                                </table>
                              </div>
                            

                            {{-- @if ($errors->has('id_barang'))
                                <div class="text-danger">
                                    {{$errors->first('id_barang')}}
                                </div>

                            @endif --}}

                        </div>

                        {{-- <div class="form-group">
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

                        </div> --}}

                        

                        {{-- <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">

                        </div> --}}
                    </form>

                </div>

            </div>

        </div>
        
    </body>

</html>