<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <title>Tutorial Eloquent Laravel</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data Pekerja - <a href="https://twitter.com/mangkus_" target="_blank">twitter saya</a>

            </div>
            <div class="card-body">
                <a href="/pekerja/tambah" class="btn btn-outline-primary">Input Pekerja Baru</a>
                <a href="/pekerja/trash" class="btn btn-outline-primary">Trash</a>
                <br>
                <br>
                <table class="table table-bordered table-hover table-striped">
                    <thead align="center">
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th colspan="2">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pekerja as $p)
                        <tr>
                            <td>{{$p->nama}}</td>
                            <td>{{$p->alamat}}</td>
                            <td>
                                <a href="/pekerja/edit/{{$p->id}}" class="btn btn-warning">Edit</a>
                                
                                
                            </td>
                            <td>
                                <a href="/pekerja/hapus/{{$p->id}}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>

        </div>

    </div>
    {{-- <h1>Data Pekerja</h1>
    
    <ul>
        @foreach($pekerja as $p)
        <li>{{ "Nama : ". $p->nama . ' | Alamat : ' . $p->alamat }}</li>
        @endforeach
    </ul>--}}

    <nav aria-label="Page navigation example">
        <ul class=" pagination justify-content-center">
            
            {{$pekerja->links()}}

        </ul>
    </nav> 
    
</body>
</html>