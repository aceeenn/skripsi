@extends('skripsi\master')

@section('content')


    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h4 class="text-bold">Data Barang</h4>

            </div>
            <div class="card-body">
                <a href="/skripsi/tambah_barang" class="btn btn-outline-primary">Tambah Barang</a>
                
                <br>
                <br>
                <table class="table table-bordered table-hover table-striped">
                    <thead align="center">
                        <tr>
                            <th>Id Barang</th>
                            <th>Jenis Barang</th>
                            <th>Berat barang</th>
                            <th>Panjang barang</th>
                            <th>Lebar barang</th>
                            <th>Tinggi barang</th>
                            <th>Jumlah barang</th>
                            <th>Tanggal Pengiriman</th>
                            <th>Berat barang</th>
                            <th colspan="2">Opsi</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach($pekerja as $p)
                            <tr>
                                <td>{{$p->nama}}</td>
                                <td>{{$p->alamat}}</td>
                                <td>{{$p->nomor_telepon}}</td>
                                <td>
                                    <a href="/pekerja/edit/{{$p->id}}" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                    <a href="/pekerja/hapus/{{$p->id}}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> --}}

                </table>

            </div>

        </div>

    </div>

    <nav aria-label="Page navigation example">
        <ul class=" pagination justify-content-center">
            
            {{-- {{$pekerja->links()}} --}}

        </ul>
    </nav> 
@endsection