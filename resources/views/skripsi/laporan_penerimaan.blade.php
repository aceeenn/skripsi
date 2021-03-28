@extends('skripsi\master')

@section('content')


    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h4 class="text-bold">Laporan Penerimaan</h4>

            </div>
            <div class="card-body">
                {{-- <a href="/skripsi" class="btn btn-outline-primary">Kembali</a> --}}
                {{-- <a href="/skripsi/export_excel_penerimaan" target="_blank" class="btn btn-success float-right">Export Excel</a> --}}
                {{-- <br>
                <br> --}}

                <table class="table-responsive table-bordered table-hover table-striped">
                    <thead align="center">
                        <tr>
                            <th>No</th>
                            <th>No Resi</th>
                            <th>Tanggal Kirim</th>
                            <th>Nama Pengirim</th>
                            <th>Nama Penerima</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Satuan Barang</th>
                            <th>No Container</th>
                            <th>Nama Kapal</th>
                            <th>Tanggal Kapal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($resi as $p)
                            <tr align="center">
                                <td>{{$i++}}</td>
                                <td>{{$p->id_resi}}</td>
                                <td>{{$p->resi->tgl_pengiriman}}</td>
                                <td>{{$p->resi->nama_pengirim}}</td>   
                                <td>{{$p->resi->nama_penerima}}</td>
                                <td>{{$p->nama_barang}}</td>
                                <td>{{$p->jumlah_barang}}</td>
                                <td>{{$p->satuan_barang}}</td>    
                                <td>{{$p->resi->no_container}}</td>
                                <td>{{$p->resi->nama_kapal}}</td>
                                <td>{{$p->resi->tgl_kapal}}</td>                            
                            </tr>
                        @endforeach
                       
                    </tbody>
                    
                </table>

            </div>

        </div>

    </div>

    <nav aria-label="Page navigation example">
        <ul class=" pagination justify-content-center">
            
            {{-- {{$resi->links()}} --}}

        </ul>
    </nav> 
@endsection