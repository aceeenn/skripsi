<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soft Deletes</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

</head>

<body>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                Data Pekerja

            </div>

            <div class="card-body">

                <a href="/pekerja" class="btn btn-outline-primary">Data pekerja</a>
                <a href="/pekerja/trash" class="btn btn-primary">Tong Sampah</a>

                <br/>
                <br/>

                <a href="/pekerja/kembalikan_semua" class="btn btn-outline-primary">Kembalikan Semua</a>
                <a href="/pekerja/hapus_permanen_semua" class="btn btn-outline-primary">Hapus Permanen Semua</a>

                <br>
                <br>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th width="30%">OPSI</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($pekerja as $p)
                            <tr>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->alamat}}</td>
                                <td>
                                    <a href="/pekerja/kembalikan/{{$p->id}}" class="btn btn-success btn-sm">Restore</a>
                                    <a href="/pekerja/hapus_permanen/{{$p->id}}" class="btn btn-danger btn-sm">Hapus Permanen</a>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>

        </div>

    </div>
</body>
</html>