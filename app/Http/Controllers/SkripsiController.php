<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//panggil model Skripsi
use App\Skripsi;
use App\Penerima;
use App\Pengirim;
use Str;

class SkripsiController extends Controller
{

    public function index(){

        // $skripsi = Skripsi::paginate(10);

        return view ('skripsi.index');
    }

    public function barang(){

        return view('skripsi.barang');
    }

    public function penerima(){
        
        $skripsi = Penerima::paginate(10);
        
        return view ('skripsi.penerima', ['skripsi' => $skripsi]);
    }

    public function pengirim(){

        $skripsi = Pengirim::paginate(10);

        return view ('skripsi.pengirim', ['skripsi' => $skripsi]);
    }

    public function tambah_penerima(){

        return view ('skripsi.tambah_penerima');
    }

    public function store_penerima(Request $request){

        $this->validate($request,[
            'nama_penerima' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required'
        ]);

        // Function get last data 
        $kode_last = Penerima::get()->count();
        if($kode_last <= 0){
            $kode = $kode_last+1;
        } else {
            $kodePenerima = Penerima::orderBy('id_penerima', 'DESC')->first();
            $kode1 = \substr($kodePenerima['id_penerima'], -3);
            $kode = intval($kode1);
        }
        
        $id_penerima = \str_pad($kode++, 3, "0", STR_PAD_LEFT);

        // FUNCTION CREATE ID 
        $nama_penerima_input = $request->nama_penerima;
        $kode_nama = \substr($nama_penerima_input, 0, 3);
        $final_id = Str::upper($kode_nama).$id_penerima;

        Penerima::create([
            'id_penerima' => $final_id,
            'nama_penerima' => $request->nama_penerima,
            'no_telpon' => $request->no_telpon,
            'alamat' => $request->alamat
        ]);

        return redirect ('/skripsi/penerima');
    }


}