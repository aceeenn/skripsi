<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    
    public function index (){

        //untuk get table mahasiswa dari database
        $mahasiswa = DB::table('mahasiswa')->get();

        //mengirim data mahasiswa dari table ke view index
        return view ('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    public function tambah(){

        return view ('mahasiswa.tambah');
    }

    public function store (Request $request){

        DB::table ('mahasiswa')->insert([
            'mhs_nama'=>$request->nama,
            'mhs_jurusan'=>$request->jurusan,
            'mhs_hobby'=>$request->hobby,
            'mhs_alamat'=>$request->alamat
        ]);

        return redirect ('/mahasiswa');
    }

    public function edit ($id){

        $mahasiswa = DB::table('mahasiswa')->where('mhs_id', $id)->get();

        return view ('mahasiswa.edit', ['mahasiswa' => $mahasiswa ]);
    
    }

    public function update(Request $request){

        DB::table('mahasiswa')-> where ('mhs_id', $request->id)->update([
            'mhs_nama'=>$request->nama,
            'mhs_jurusan'=>$request->jurusan,
            'mhs_hobby'=>$request->hobby,
            'mhs_alamat'=>$request->alamat
        ]);

        return redirect('/mahasiswa');
    }

    public function hapus ($id){

        DB::table('mahasiswa')->where('mhs_id', $id)->delete();

        return redirect('/mahasiswa');
    }
}
