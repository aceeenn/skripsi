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
 
                    <div class="form-group">
                        <form method="POST" action="/skripsi/store_resi">
                            {{csrf_field()}}
 
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
                                                <option value="{{$item->id_penerima}}">{{$item->nama_penerima}}
                                                </option>         
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Tanggal Pengiriman</label>
                                    <input type="date" name="tanggal_pengiriman" class="form-control" placeholder="Tanggal Pengiriman...">
                                        @if ($errors->has('tanggal_pengiriman'))
                                            <div class="text-danger">
                                                {{$errors->first('tanggal_pengiriman')}}
             
                                            </div>
                                        @endif
                                </div>
                                <div class="col">
                                    <label>No Surat Jalan</label>
                                    <input type="text" name="no_sj" class="form-control" placeholder="No Surat Jalan">
                                </div>
                            </div>
                            <br>
                            
                            <div class="form-group">
                                <label>No Container</label>
                                <input type="text" name="no_container" class="form-control" placeholder="No Container">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label>Nama Kapal</label>
                                    <input type="text" name="nama_kapal" class="form-control" placeholder="Nama Kapal...">
                                </div>
                                <div class="col">
                                    <label>Tanggal Kapal</label>
                                    <input type="date" name="tgl_kapal" class="form-control" placeholder="Tanggal Kapal...">                       
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Tanggal Sandar</label>
                                    <input type="date" name="tgl_sandar" class="form-control" placeholder="Tanggal Sandar...">
                                </div>
                                <div class="col">
                                    <label>Tanggal Antar Barang</label>
                                    <input type="date" name="tgl_antar" class="form-control" placeholder="Tanggal Antar...">                                     
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
                                        <th>Jumlah Barang</th>
                                        <th>Satuan Barang</th>
                                        <th>Berat Barang</th>
                                        <th>Panjang Barang</th>
                                        <th>Lebar Barang</th>
                                        <th>Tinggi Barang</th>
                                        <th style="width: 140px">Opsi</th>
                                    </tr>
                                    <button type="button" data-toggle="modal" data-target="#modalSaya" 
                                    class="btn btn-primary">Add</button>
                           
                                    <br>
 
                                </thead>
 
                                <br>

                                <tbody>
                                    <tr>
                                        <th>
                                            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
                                        </th>
                                        <th>
                                            <input type="text" name="jumlah_barang" class="form-control" placeholder="Jumlah Barang">
                                        </th>
                                        <th>
                                            <input type="text" name="satuan_barang" class="form-control" placeholder="Satuan Barang">
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
                                            <a href="/penerima/edit/" class="btn btn-sm btn-warning">Edit</a>
                                            |
                                            <a href="/penerima/hapus/" class="btn btn-sm btn-danger">Hapus</a>
                                        </th>
                                    </tr>
                                            
                                     <!-- Contoh Modal -->
                                    <div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalSayaLabel">Input Data Resi</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form>
                                                    <div class="modal-body">    
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <label>Nama Barang</label>
                                                                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
                                                            </div>
                                                            <div class="col">
                                                                <label>Jumlah Barang</label>
                                                               <input type="text" name="jumlah_barang" class="form-control" placeholder="Jumlah Barang">
                                                            </div>
                                                        </div>
                                                        
                                                        <br>
                                                        
                                                        <div class="form-row">
                                                            <div class="col">
                                                                <label>Satuan</label>
                                                                <select class="form-control">
                                                                    <option>PCS</option>
                                                                    <option>DUS</option>
                                                                    <option>DRM</option>
                                                                    <option>ZAK</option>
                                                                </select>
                                                            </div>
                                                            <div class="col">
                                                                <label>Berat Barang</label>
                                                                <input type="text" name="berat_barang" class="form-control" placeholder="Berat Barang">
                                                            </div>
                                                        </div>
                                                        
                                                        <br>

                                                        <div class="form-row">
                                                            <div class="col">
                                                                <label>Panjang Barang</label>
                                                               <input type="text" name="panjang_barang" class="form-control" placeholder="Panjang Barang">
                                                            </div>
                                                            <div class="col">
                                                                <label>Lebar Barang</label>
                                                                <input type="text" name="lebar_barang" class="form-control" placeholder="Lebar Barang">
                                                            </div>
                                                            <div class="col">
                                                                <label>Tinggi Barang</label>
                                                                <input type="text" name="tinggi_barang" class="form-control" placeholder="Tinggi Barang">
                                                            </div>
                                                        </div>
                                         
                                                            {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
                    </div>
                </div>                    
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </body>

</html>