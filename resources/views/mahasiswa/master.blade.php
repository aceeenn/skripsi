<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>CRUD Mahasiswa</title>

    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

</head>

<body>

    <header>
        <br/>

        <h2><a href="https://twitter.com/mangkus_"> Find me in tuitter</a></h2>
       
        <nav>
            <a href="/">HOME</a>
            |
            <a href="/pegawai">PEGAWAI</a>
                               
        </nav>
        
    </header>     

    <hr/>
    
    <h3>@yield ('halaman_judul')</h3>

    @yield('konten') 

    <br/>
    <br/>
    <hr/>

    <footer>
        CopyRight 2020
    </footer>

<script src="{{asset('/js/app.js')}}"></script>
    
</body>

</html>