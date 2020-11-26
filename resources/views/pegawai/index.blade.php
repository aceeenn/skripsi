<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD pegawai</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

</head>

<body>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">

                <strong>Data Pegawai</strong>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="pr-2 pl-3">
                        <a class="btn btn-primary" href="/mahasiswa">MAHASISWA</a>
                    </div>

                    <div class="pr-2">
                        <a class="btn btn-primary" href="/">HOME</a>

                    </div>

                    <div class="pr-2">
                        <a href="/pegawai/tambah" class="btn btn-primary">Input Data Pegawai</a>

                    </div>

                    <form action="/pegawai/cari" method="GET" class="form-inline ml-auto pr-3">
                        <div class="m-form my-0">

                            <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .."
                                value="{{ old('cari') }}">
                            <input class="btn btn-primary ml-3" type="submit" value="CARI">
                        </div>

                    </form>

                </div>

                <br />

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>

                    @foreach ($pegawai as $p)

                    <tr>
                        <td>{{ $p->pegawai_nama }}</td>
                        <td>{{ $p->pegawai_jabatan }}</td>
                        <td>{{ $p->pegawai_umur }}</td>
                        <td>{{ $p->pegawai_alamat }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>

                            <a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
                        </td>
                    </tr>

                    @endforeach

                </table>

                {{-- <br/>
                    Halaman : {{$pegawai->currentPage()}} <br />
                Jumlah Data : {{$pegawai->total()}} <br />
                Data per Halaman : {{$pegawai->perPage()}}<br />
                <br /> --}}


                <nav aria-label="Page navigation example">
                    <ul class=" pagination justify-content-center">
                        {{-- {{$pegawai->links('vendor.pagination.custom')}} --}}
                        {{$pegawai->links()}}

                    </ul>
                </nav>


            </div>
        </div>
    </div>

</body>

</html>
