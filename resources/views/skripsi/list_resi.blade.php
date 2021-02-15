@extends('skripsi\master')

@section('content')


    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h4 class="text-bold">Data Resi</h4>

            </div>
            <div class="card-body">
                {{-- <a href="/skripsi/tambah_penerima" class="btn btn-outline-primary">Tambah Penerima</a> --}}
                
                <br>
                <br>
                <table class="table table-bordered table-hover table-striped">
                    <thead align="center">
                        <tr>
                            <th>No Resi</th>
                            <th>Nama Barang</th>
                            <th>Nama Barang</th>
                            <th>Tanggal</th>
                            <th>Nama Pengirim</th>
                            <th>Nama Penerima</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skripsi as $p)
                        <tr align="center">
                            <th>STS2101001</th>
                            <th>{{$p->nama_barang}}</th>
                            <th>
                                @foreach ($p->transaksi as $a)
                                {{$a->transaksi}},
                                @endforeach
                            </th>
                            <th>01-jan-2021</th>
                            <th>Ardiansyah</th>
                            <th>Saldi</th>
                        </tr>
                        @endforeach
                    </tbody>
                    {{-- <tbody>
                        @foreach($skripsi as $p)
                            <tr>
                                <td>{{$p->nama_penerima}}</td>
                                <td>{{$p->no_telpon}}</td>
                                <td>{{$p->alamat}}</td>
                                <td class="text-center">
                                    <a href="/penerima/edit/{{$p->id}}" class="btn btn-sm btn-warning">Edit</a>
                                    |
                                    <a href="/penerima/hapus/{{$p->id}}" class="btn btn-sm btn-danger">Hapus</a>
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
            
            {{-- {{$skripsi->links()}} --}}

        </ul>
    </nav> 
@endsection