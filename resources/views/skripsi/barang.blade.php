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
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        {{-- table-bordered table-striped --}}
                        <thead align="center">
                            <tr>
                                <th>Tanggal Pengiriman</th>
                                <th>Nama Pengirim</th>
                                {{-- <th>Nama Penerima</th> --}}
                                <th>Jenis Barang</th>
                                <th>Berat Barang</th>
                                <th>Panjang Barang</th>
                                <th>Lebar Barang</th>
                                <th>Tinggi Barang</th>
                                <th>Jumlah Barang</th>
                                <th>Berat Barang</th>
                                <th style="width: 165px">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($skripsi as $p)
                                <tr>
                                    <td>{{$p->tanggal_pengiriman}}</td>

                                    <td>
                                        @foreach ($p->pengirim as $pg)
                                            {{$pg->nama_pengirim}},
                                        @endforeach
                                    </td>
                                    
                                    <td>{{$p->jenis_barang}}</td>
                                    <td>{{$p->berat_barang}}</td>
                                    <td>{{$p->panjang_barang}}</td>
                                    <td>{{$p->lebar_barang}}</td>
                                    <td>{{$p->tinggi_barang}}</td>
                                    <td>{{$p->jumlah_barang}}</td>
                                    <td>{{$p->berat_barang}}</td>
                                    <td>
                                        <a href="/pekerja/edit/{{$p->id}}" class="btn btn-warning">Edit</a>
                                    |
                                        <a href="/pekerja/hapus/{{$p->id}}" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
    
                    </table>

                </div>
                

            </div>

        </div>

    </div>

    <nav aria-label="Page navigation example">
        <ul class=" pagination justify-content-center">
            
            {{-- {{$pekerja->links()}} --}}

        </ul>
    </nav> 
@endsection