<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class PegawaiController extends Controller 
{
    public function index(){

        //untuk mengambil data dari database, table pegawai 
        $pegawai = DB::table('pegawai')->paginate(10);

        //mengirim data pegawai ke view index
        return view ('pegawai.index', ['pegawai' => $pegawai]);
    }

    public function tambah(){

        return view ('pegawai.tambah');
        
    }

    public function store(Request $request){

        //insert database ke table pegawai
        DB::table('pegawai')->insert([
            'pegawai_nama' =>$request->nama,
            'pegawai_jabatan' =>$request->jabatan,
            'pegawai_umur' =>$request->umur,
            'pegawai_alamat' =>$request->alamat
        ]);

        //kembali ke halaman /pegawai
        return redirect ('/pegawai');
    }

    public function edit ($id){

        //mengambil database table pegawai , berdasarkan id yg di pilih
        $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();

        //passing database table pegawai, yg di dapat ke view.blade.php
        return view ('pegawai.edit', ['pegawai' => $pegawai]);

    }

    public function update(Request $request){

        //mengupdate database table pegawai , berdasarkan id yg di pilih
        DB::table('pegawai')->where ('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' =>$request->jabatan,
            'pegawai_umur' =>$request->umur,
            'pegawai_alamat' =>$request->alamat

        ]);

        //kembali ke halaman /pegawai
        return redirect ('/pegawai');

    }

    public function hapus ($id){

        //menghapus database table pegawai , berdasarkan id yg di pilih
        DB::table('pegawai')->where('pegawai_id', $id)->delete();

        //kembali ke halaman /pegawai
        return redirect ('/pegawai');
    }

    public function cari (Request $request){

        // menangkap data pencarian
        $cari = $request->cari;

            //mengambil data dari table pegawai sesuai dengan pencarian data
        $pegawai = DB::table('pegawai')
        ->where('pegawai_nama','like',"%".$cari."%")
        ->paginate();

            //mengirim data pegawai ke view index
        return view('pegawai.index',['pegawai'=>$pegawai]);
    }

    public function input(){
        return view ('pegawai.input');

    }

    

    public function proses(Request $request){

        $message = [
            'required' => ':attribute wajib diisi cuy!',
            'min' => ':attribute harus diisi minimal :min karakter cuy!',
            'max' => ':attribue harus disiin maximal :max karakter cuy!' 
        ];

        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'jabatan' => 'required',
            'umur' => 'required|numeric',
            'alamat' => 'required'
        ], $message);


        // DB::table('pegawai')->insert([
        //     'pegawai_nama' =>$request->nama,
        //     'pegawai_jabatan' =>$request->jabatan,
        //     'pegawai_umur' =>$request->umur,
        //     'pegawai_alamat' =>$request->alamat
        // ]);

        return view ('pegawai.proses', ['data' => $request]);

    }

    
    //--------batas coding beda----------








// --------batas coding beda----------



//     public function formulir (){

//         return view('formulir');

//     }

//     public function proses (Request $request){
//         $nama = $request->input('nama');
//         $alamat = $request->input('alamat');
//         return "Nama :" .$nama." Alamat : " .$alamat;
//     }

}