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
                    <div class="card-body">
                        <h3>Input Data pegawai</h3>
                        <h3 class="my-4">Data Yang Diinput :</h3>
    
                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Nama</td>
                                <td>{{$data->nama}}</td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>{{$data->jabatan}}</td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td>{{$data->umur}}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>{{$data->alamat}}</td>
                            </tr>
    
                        </table>

                        <form action="/pegawai/store" method="post">
                            {{ csrf_field() }}
    
                            <div class="form-group">
                                
                                <input class="btn btn-success" type="submit" value="Simpan Data">
                                <a href="/pegawai/input" class="btn btn-primary">Kembali</a>
                                
                            </div>
    
                        </form>
    
                        
    
                    </div>

                </div>                

            </div>

        </div>

    </div>


</body>

</html>
