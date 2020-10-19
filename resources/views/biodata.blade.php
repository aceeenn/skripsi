<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Tutorial laravel</title>

</head>

<body>

    <h1>Tutorial laravel by : me</h1>
    <a href="https://twitter.com/mangkus_">My Twitter</a>

    <br>
    <p>Nama : {{$nama}}</p>

    <p>Hobby : </p>
    <ul>
        @foreach ($hobby as $h)

        <li>
            {{$h}}
        </li>
            
        @endforeach
    </ul>
    
</body>

</html>