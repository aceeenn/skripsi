<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller 
{
    public function index(){

        //untuk mengambil data dari database, table pegawai 
        $pegawai = DB::table('pegawai')->get();

        //mengirim data pegawai ke view index
        return view ('index', ['pegawai' => $pegawai]);
    }

    public function tambah(){

        return view ('tambah');
        
    }

    public function store(Request $request){

        //insert database ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' =>$request->nama,
            'pegawai_jabatan' =>$request->jabatan,
            'pegawai_umur' =>$request->umur,
            'pegawai_alamat' =>$request->alamat
        ]);

        return redirect ('/pegawai');
    }

    public function edit ($id){

        //mengambil database table pegawai , berdasarkan id yg di pilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

        //passing database table pegawai, yg di dapat ke view.blade.php
        return view ('edit', ['pegawai' => $pegawai]);

    }

    public function update(Request $request){

        DB::table('pegawai')->where ('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' =>$request->jabatan,
            'pegawai_umur' =>$request->umur,
            'pegawai_alamat' =>$request->alamat

        ]);

        return redirect ('/pegawai');

    }

    public function formulir (){

        return view('formulir');

    }

    public function proses (Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama :" .$nama." Alamat : " .$alamat;
    }

}