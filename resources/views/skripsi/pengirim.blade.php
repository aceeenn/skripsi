@extends('skripsi\master')

@section('content')


    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                <h4 class="text-bold">Data Pengirim</h4>

            </div>
            <div class="card-body">
                <a href="/skripsi/tambah_pengirim" class="btn btn-outline-primary">Tambah Pengirim</a>
                
                <br>
                <br>
                <table class="table table-bordered table-hover table-striped">
                    <thead align="center">
                        <tr>
                            <th>Nama Pengirim</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th style="width: 170px" >Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($skripsi as $p)
                            <tr>
                                <td>{{$p->nama_pengirim}}</td>
                                <td>{{$p->no_telpon}}</td>
                                <td>{{$p->alamat}}</td>
                                <td class="text-center">
                                    <a href="/skripsi/pengirim/edit-pengirim/{{$p->id_pengirim}}" class="btn btn-warning">Edit</a>
                                    |
                                    <a href="/skripsi/pengirim/hapus-pengirim/{{$p->id_pengirim}}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <nav aria-label="Page navigation example">
        <ul class=" pagination justify-content-center">
            
            {{$skripsi->links()}}

        </ul>
    </nav> 
    
@endsection