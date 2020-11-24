<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sedang Belajar CRUD Laravel</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}"> 

</head>

<body>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h2><strong>Edit Pegawai - </strong> <a href="https://twitter.com/mangkus_">Tuitter Saya</a></h2>
                <br/>

            </div>

                <div class="card-body text-md-left">
                    <a class="btn btn-primary" href="/pegawai"> Kembali</a>

                    <br/>
                </div>

                    <div class="card-body">
                        @foreach($pegawai as $p)

                            <form action="/pegawai/update" method="POST">
                                <input type="hidden" name="id" value="{{$p->pegawai_id}}">
                                {{csrf_field()}}

                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control" type="text" name="nama" value="{{$p->pegawai_nama}}">

                                    <label>Jabatan</label>
                                    <input class="form-control" type="text" name="jabatan" value="{{$p->pegawai_jabatan}}">
                                    
                                    <label>Umur</label>
                                    <input class="form-control" type="number" name="umur" value="{{$p->pegawai_umur}}">

                                    <label>Alamat</label>
                                    Alamat <textarea class="form-control" name="alamat">{{$p->pegawai_alamat}}</textarea>

                                    <br/>

                                    <input class="btn btn-outline-primary" type="submit" value="Simpan Data">

                                </div>
                
                            </form>

                        @endforeach

                    </div>
             
        </div>

    </div>   

</body>
</html>