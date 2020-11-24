@extends('mahasiswa.master')

@section('halaman_judul', 'Edit Data Mahasiswa')

@section('konten')

<a href="/mahasiswa">Kembali</a>

<br/>
<br/>

@foreach ($mahasiswa as $a)


<form action="/mahasiswa/update" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$a->mhs_id}}"><br/>
    Nama <input type="text" name="nama" required="required" value="{{$a->mhs_nama}}"><br/>
    Jurusan <input type="text" name="jurusan" required="required" value="{{$a->mhs_jurusan}}"><br/>
    Hobby <input type="text" name="hobby" required="required" value="{{$a->mhs_hobby}}"><br/>
    Alamat <textarea name="alamat" required="required">{{$a->mhs_alamat}}</textarea><br/>
    <input type="submit" value="Simpan Data">
</form>

@endforeach


@endsection