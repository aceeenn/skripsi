<!-----menghubungkan ke folder mahasiswa file master------>

@extends ('mahasiswa.master')


<!-----ini adalah halaman judul yg ada di body-------->
@section('halaman_judul', 'Biodata Mahasiswa')

<!-------bagian konten-------->
@section('konten')


<a href="/mahasiswa/tambah"> Tambah Data Disini</a>
<br/>
<br/>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Hobby</th>
            <th>Alamat</th>
            <th>Opsi</th>

        </tr>

        @foreach ($mahasiswa as $a)

            <tr>
                <td>{{$a->mhs_nama}}</td>
                <td>{{$a->mhs_jurusan}}</td>
                <td>{{$a->mhs_hobby}}</td>
                <td>{{$a->mhs_alamat}}</td>
                <td>
                    <a href="/mahasiswa/edit/{{$a->mhs_id}}">Edit</a>
                    |
                    <a href="/mahasiswa/hapus/{{$a->mhs_id}}">Hapus</a>
                </td>
            </tr>

        @endforeach

    </table>

@endsection