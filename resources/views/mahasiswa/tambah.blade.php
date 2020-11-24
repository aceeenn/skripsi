@extends('mahasiswa.master')

@section('halaman_judul', 'Tambah Data Mahasiswa')

@section('konten')

    <a href="/mahasiswa">Kembali</a>

    <br/>
    <br/>
    
    <form action="/mahasiswa/store" method="post">
            {{csrf_field()}}
        Nama : <input type="text", name="nama", required="required"> <br/>
        Jurusan : <input type="text", name="jurusan", required="required"> <br/>
        Hobby :  <input type="text", name="hobby", required="required"> <br/>
        Alamat :  <textarea name="alamat" required="required"></textarea> <br/>
        <input type="submit" value="Simpan Data">
    </form>


@endsection