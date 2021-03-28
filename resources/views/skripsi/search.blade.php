@extends('skripsi\master')

@section('content')

<div class="container">
  <div class="card mt-3">
    <div class="card-header">

      <h2 class="text-center">PT. Sarana Trans Sumatera</h2>
      
    </div>

    <div class="card-body container-fluid">

        <form action="/skripsi/cari" method="GET" class="form-inline ml-auto pr-3">

          <div class="row">
            <div class="col-md-12">
              <input text-center class="form-control" type="text" name="cari" placeholder="Cari Resi" value="{{ old('cari') }}">
              <input class="btn btn-primary ml-3 align-content-center" type="submit" value="Cari">
              
              <a href="/skripsi/tambah_resi" class="btn btn-outline-primary">Tambah Resi Baru</a>

            </div>
          </div>

        </form>

        <br>
        <img class="img-fluid" src="{{asset('/image/background.jpg')}}">
        <table class="table table-bordered table-hover table-striped">
          <br>
          <br>
          <thead align="center">
              <tr>
                  <th>No Resi</th>
                  <th>Tanggal</th>
                  <th>Nama Pengirim</th>
                  <th>Nama Penerima</th>
                  <th>Nama Kapal</th>
                  <th>Tanggal Kapal</th>
                  <th>Tanggal Sandar</th>
                  <th>Tanggal Antar</th>
              </tr>
          </thead>
          <tbody>

              @foreach($resi as $p)
                  <tr align="center">
                      <td>{{$p->id_resi}}</td>
                      <td>{{$p->tgl_pengiriman}}</td>
                      <td>{{$p->nama_pengirim}}</td>   
                      <td>{{$p->nama_penerima}}</td>
                      <td>{{$p->nama_kapal}}</td>
                      <td>{{$p->tgl_kapal}}</td>                            
                      <td>{{$p->tgl_sandar}}</td>
                      <td>{{$p->tgl_antar}}</td>                          
                  </tr>
              @endforeach
             
          </tbody>
          
      </table>
        
    <br>
    <br>

    <table>
          
    </table>

    <div class="row">
      <div class="col-6 col-md-4">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
          <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
        </svg>
        <p>Jl. Peternakan Raya 1 No. 35
          Kapuk, Cengkareng
          Jakarta Barat
        </p>
      </div>
      <div class="col-6 col-md-4">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          
        </svg>        
        <p>021-55522233</p>

      </div>
      <div class="col-6 col-md-4">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
        </svg>
        <p>market.fcl@saranatranssumatera.com</p>

      </div>

    
  </div>  
  
</div>
    
@endsection