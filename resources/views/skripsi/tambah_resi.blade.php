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
                            {{-- /skripsi/store_resi --}}
                            {{csrf_field()}}
 
                            <div class="row">
                                <div class="col">
                                    <label>Nama Pengirim</label>                                  
                                        <select name="nama_pengirim" class="form-control">
                                            <option selected disabled>Pilih Pengirim</option>
                                            @foreach ($pengirim as $item)
                                           <option value="{{$item->nama_pengirim}}">{{$item->nama_pengirim}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="col">
                                    <label>Nama Penerima</label>
                                        <select name="nama_penerima" class="form-control">
                                            <option selected disabled>Pilih Penerima</option>
                                            @foreach ($penerima as $item)
                                                <option value="{{$item->nama_penerima}}">{{$item->nama_penerima}}
                                                </option>         
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Tanggal Pengiriman</label>
                                    <input type="date" name="tgl_pengiriman" class="form-control" placeholder="Tanggal Pengiriman">
                                        @if ($errors->has('tgl_pengiriman'))
                                            <div class="text-danger">
                                                {{$errors->first('tgl_pengiriman')}}
                                            </div>
                                        @endif
                                </div>
                                <div class="col">
                                    <label>No Container</label>
                                    <input type="text" name="no_container" class="form-control" placeholder="No Container">
                                </div>
                                <div class="col">
                                    <label>No Surat Jalan</label>
                                    <input type="text" name="no_sj" class="form-control" placeholder="No Surat Jalan">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col">
                                    <label>Nama Kapal</label>
                                    <input type="text" name="nama_kapal" class="form-control" placeholder="Nama Kapal">
                                </div>
                                <div class="col">
                                    <label>Tanggal Kapal</label>
                                    <input type="date" name="tgl_kapal" class="form-control" placeholder="Tanggal Kapal">                       
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <label>Tanggal Sandar</label>
                                    <input type="date" name="tgl_sandar" class="form-control" placeholder="Tanggal Sandar">
                                </div>
                                <div class="col">
                                    <label>Tanggal Antar Barang</label>
                                    <input type="date" name="tgl_antar" class="form-control" placeholder="Tanggal Antar">                                     
                                </div>
                            </div>
                        
                        <br>
 

                        {{--barang--}}
                        
                        <div class="datagrid-view table-responsive">
                                {{-- <form method="POST" id="post">
                                <span id="result"></span>
                                </form> --}}
                            <table class="table table-bordered table-striped" id="table_barang">
                                    <span id="result"></span>
                                    <table class="table table-bordered table-striped" id="user_table">
                                        <thead>
                                           <tr>
                                                <th>Nama Barang</th>
                                                <th>Satuan Barang</th>
                                                <th>Jumlah Barang</th>
                                                <th>Berat Barang</th>
                                                <th>Panjang Barang</th>
                                                <th>Lebar Barang</th>
                                                <th>Tinggi Barang</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                       
                                        </tbody>
                                        {{-- <tfoot>
                                            <tr>
                                                <td colspan="7" align="right">&nbsp;</td>
                                                <td>
                                                    @csrf
                                                    <input type="submit" name="save" id="save" class="btn   btn-primary" value="Save" />
                                                </td>
                                            </tr>
                                        </tfoot> --}}
                                    </table>
                                
                            </table>

                        </div>
                        <input type="submit" name="save" id="save" class="btn btn-primary" value="Save"/>
                    </form>

                    </div>
                </div>                    
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </body>

</html>

<script>
    $(document).ready(function(){
       
        var count = 1;
       
        dynamic_field(count);
       
        function dynamic_field(number)
        {
            html = '<tr>';
            html += '<td><input type="text" name="nama_barang[]" class="form-control" /></td>';
            html += '<td><input type="text" name="satuan_barang[]" class="form-control" /></td>';
            html += '<td><input type="text" name="jumlah_barang[]" class="form-control" /></td>';
            html += '<td><input type="text" name="berat_barang[]" class="form-control" /></td>';
            html += '<td><input type="text" name="panjang_barang[]" class="form-control" /></td>';
            html += '<td><input type="text" name="lebar_barang[]" class="form-control" /></td>';
            html += '<td><input type="text" name="tinggi_barang[]" class="form-control" /></td>';
                if(number > 1)
               {
                html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
                   $('tbody').append(html);
               }
               else
               {   
                   html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
                   $('tbody').html(html);
               }
        }
       
    $(document).on('click', '#add', function(){
        count++;
        dynamic_field(count);
    });
       
    $(document).on('click', '.remove', function(){
        count--;
        $(this).closest("tr").remove();
    });
       
    $('#dynamic_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
                    url:'{{ route("dynamic-field.insert") }}',
                    method:'post',
                    data:$(this).serialize(),
                    dataType:'json',
                    beforeSend:function(){
                    $('#save').attr('disabled','disabled');
                    },
                    success:function(data)
                    {
                        if(data.error)
                        {
                            var error_html = '';
                            for(var count = 0; count < data.error.length; count++)
                            {
                                error_html += '<p>'+data.error[count]+'</p>';
                            }
                            $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                        }
                        else
                        {
                            dynamic_field(1);
                            $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                        }
                            $('#save').attr('disabled', false);
                    }
                })
            });
            
        });
    </script>
       