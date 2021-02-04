<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//panggil model Skripsi
use App\Skripsi;
use App\Penerima;
use App\Pengirim;
use App\Barang;
use Str;

class SkripsiController extends Controller
{

    public function index(){

        return view ('skripsi.index');
    }

    public function list_resi(){

        return view ('skripsi.list_resi');
    }

    public function tambah_resi(){

        $pengirim = Pengirim::get()->all();
        $penerima = Penerima::get()->all();

        return view ('skripsi.tambah_resi', ['pengirim'=>$pengirim, 'penerima' => $penerima]);

    }

    public function barang(){

        $skripsi = Barang::paginate(10);
        
        return view ('skripsi.barang', ['skripsi' => $skripsi]);

    }

    public function tambah_barang(Request $request){

        return view ('skripsi.tambah_barang');

    }

    public function store_barang(Request $request){

        $this->validate($request,[
            'id_barang'=>'required',
            'jenis_barang' => 'required',
            'berat_barang' => 'required',
            'panjang_barang' => 'required',
            'lebar_barang' => 'required',
            'tinggi_barang' => 'required',
            'jumlah_barang' => 'required',
            'berat_barang' => 'required',
            'tanggal_pengiriman' => 'required',
        ]);

        Barang::create([
            'id_barang'=>$request->id_barang,
            'jenis_barang' => $request->jenis_barang,
            'berat_barang' => $request->berat_barang,
            'panjang_barang' => $request->panjang_barang,
            'lebar_barang' =>$request->lebar_barang,
            'tinggi_barang' =>$request->tinggi_barang,
            'jumlah_barang' =>$request->jumlah_barang,
            'berat_barang' =>$request->berat_barang,
            'tanggal_pengiriman' =>$request->tanggal_pengiriman,
        ]);

        return redirect ('/skripsi/barang');

    }

    public function penerima(){
        
        $skripsi = Penerima::paginate(10);
        
        return view ('skripsi.penerima', ['skripsi' => $skripsi]);
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
            // $kode = 0;
        } else {
            $kodePenerima = Penerima::orderBy('id_penerima', 'DESC')->first();
            $kode1 = \substr($kodePenerima['id_penerima'], -3);
            $kode = intval($kode1);
            $kode++;
        }
        
        $id_penerima = \str_pad($kode, 3, "0", STR_PAD_LEFT);

        // FUNCTION CREATE ID 
        $nama_penerima_input = $request->nama_penerima;
        $kode_nama = \substr($nama_penerima_input, 0, 3);
        $final_id = Str::upper($kode_nama).$id_penerima;

        // dd($final_id);
        // die;

        Penerima::create([
            'id_penerima' => $final_id,
            'nama_penerima' => $request->nama_penerima,
            'no_telpon' => $request->no_telpon,
            'alamat' => $request->alamat
        ]);

        return redirect ('/skripsi/penerima');
    }

    public function pengirim(){

        $skripsi = Pengirim::paginate(10);

        return view ('skripsi.pengirim', ['skripsi' => $skripsi]);
    }

    public function tambah_pengirim(){

        return view ('skripsi.tambah_pengirim');
    }

    public function store_pengirim(Request $request){

        $this->validate($request,[
            'nama_pengirim' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required'
        ]);

        // Function get last data 
        $kode_last = Pengirim::get()->count();
        if($kode_last <= 0){
            $kode = $kode_last+1;
        } else {
            $kodePengirim = Pengirim::orderBy('id_pengirim', 'DESC')->first();
            $kode1 = \substr($kodePengirim['id_pengirim'], -3);
            $kode = intval($kode1);
            $kode++;
        }
        
        $id_pengirim = \str_pad($kode, 3, "0", STR_PAD_LEFT);

        // FUNCTION CREATE ID 
        $nama_pengirim_input = $request->nama_pengirim;
        $kode_nama = \substr($nama_pengirim_input, 0, 3);
        $final_id = Str::upper($kode_nama).$id_pengirim;

       

        Pengirim::create([
            'id_pengirim' => $final_id,
            'nama_pengirim' => $request->nama_pengirim,
            'no_telpon' => $request->no_telpon,
            'alamat' => $request->alamat
        ]);

        return redirect ('/skripsi/pengirim');
    }


}