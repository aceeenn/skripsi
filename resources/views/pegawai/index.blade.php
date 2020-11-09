<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD pegawai</title>

</head>

<body>

    <h3>Data Pegawai</h3>
    <a href="/mahasiswa">MAHASISWA</a>
    |
    <a href="/">HOME</a>
    <br/>
    <br/>
    <br/>
    

    <a href="/pegawai/tambah"> Tambah Pegawai Baru Disini cuy</a>

    <br/>
    <br/>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>

        @foreach ($pegawai as $p)
        
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_jabatan }}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
            <td>
                <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                |
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
            </td>
        </tr>
            
        @endforeach

    </table>
    
</body>

</html>