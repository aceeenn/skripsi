@extends('skripsi\master')

@section('content')


    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h4 class="text-bold">Data Resi</h4>

            </div>
            <div class="card-body">
                <a href="/skripsi" class="btn btn-outline-primary">Kembali</a>
                <br>
                <br>

                <table class="table table-bordered table-hover table-striped">
                    <thead align="center">
                        <tr>
                            <th>No Resi</th>
                            <th>Tanggal</th>
                            <th>Nama Pengirim</th>
                            <th>Nama Penerima</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Satuan Barang</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($resi as $p)
                            <tr align="center">
                                <td>{{$p->id_resi}}</td>
                                <td>{{$p->tgl_pengiriman}}</td>   
                                <td>{{$p->nama_pengirim}}</td>
                                <td>{{$p->nama_penerima}}</td>
                                <td>
                                    @foreach($p->transaksi as $t)
                                    {{$t->nama_barang}},
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($p->transaksi as $t)
                                    {{$t->jumlah_barang}},
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($p->transaksi as $t)
                                    {{$t->satuan_barang}},
                                    @endforeach
                                </td>
                                
                                
                                {{-- <td>{{$t->jumlah_barang}}</td>
                                <td>{{$t->satuan_barang}}</td>  --}}
                            </tr>
                        @endforeach
                       
                    </tbody>
                    

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