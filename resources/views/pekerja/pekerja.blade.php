<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <title>Tutorial Eloquent Laravel</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

</head>

<body>
    <h1>Data Pekerja</h1>
    
    <ul>
        @foreach($pekerja as $p)
        <li>{{ "Nama : ". $p->nama . ' | Alamat : ' . $p->alamat }}</li>
        @endforeach
    </ul>

    <nav aria-label="Page navigation example">
        <ul class=" pagination justify-content-center">
            
            {{$pekerja->links()}}

        </ul>
    </nav>
    
</body>
</html>