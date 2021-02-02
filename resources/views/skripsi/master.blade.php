<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT. Sarana Trans Sumatera</title>

{{-- <link rel="stylesheet" href="{{asset('/css/app.css')}}"> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar center navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/skripsi">STS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/skripsi">Home<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/skripsi/list_resi">List Resi<span class="sr-only"></span></a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Master
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                {{-- <a class="dropdown-item" href="/skripsi/barang">Barang</a> --}}
                
                {{-- <div class="dropdown-divider"></div> --}}
                <a class="dropdown-item" href="/skripsi/pengirim">Pengirim</a>
                <a class="dropdown-item" href="/skripsi/penerima">Penerima</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Laporan</a>
            </li>
            
          </ul>
          {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> --}}
        </div>
      </nav> 

@yield('content')

<script src="{{asset('/js/app.js')}}"></script>

</body>

</html>