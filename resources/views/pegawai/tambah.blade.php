<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sedang Belajar CRUD Laravel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <strong>Tambah Data Pegawai -</strong> <a href="https://twitter.com/mangkus_">Tuitter Saya</a>
            </div>

                <div class="card-body">
                    {{-- <a class="btn btn-primary" href="/pegawai">Kembali</a> --}}

                    <form action="/pegawai/store" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input name="nama" type="text" class="form-control" placeholder="Nama Pegawai.."> 
                        
                            <label>Jabatan</label>
                            <input name="jabatan" type="text" class="form-control" placeholder="Jabatan..">
                        
                            <label>Umur</label>
                            <input name="umur" type="number" class="form-control" placeholder="Umur..">
                        
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat.."></textarea>
                        
                            <br/>
                        
                            <input class="btn btn-success" type="submit" value="Simpan Data">
                            <a class="btn btn-primary" href="/pegawai">Kembali</a>
                        </div>

                    </form>
                
                </div>
        </div>
    </div>  

</body>
</html>