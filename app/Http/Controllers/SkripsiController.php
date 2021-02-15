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

    // public function customer(){

    //     return view ('skripsi.index_customer');
    // }

    // public function cari(Request $request){

    //     $cari = $request->cari;

    //     $skripsi = DB::table('barang')->where('id_barang', 'like', "%".$cari."%")->paginate();

    //     return view ('skripsi.index_customer', ['skripsi'=>$skripsi]);
    // }

    public function list_resi(){

        $skripsi = Barang::All();

        return view ('skripsi.list_resi', ['skripsi'=>$skripsi]);
    }

    public function tambah_resi(){

        $pengirim = Pengirim::get()->all();
        $penerima = Penerima::get()->all();

        return view ('skripsi.tambah_resi', ['pengirim'=>$pengirim, 'penerima' => $penerima]);
    }
    function insert (Request $request){

        if ($request->ajax()){
            $rules= array(
                'first_name.*'  => 'required',
                'last_name.*'  => 'required'
                
            );

            $error = Validator::make($request->all(), $rules);

            if($error->fails()){
                return response()->json([
                    'error' => $error->errors()->all()

                ]);
            }

            $first_name = $request->first_name;
            $last_name = $request->last_name;
          

            for ($count = 0; $count < count ($first_name); $count++){
                $data = array (
                    'first_name' => $first_name[$count],
                    'last_name' => $last_name[$count]
                    
                );

                $insert_data[] = $data;
            }

            DynamicField::insert ($insert_data);

            return response()->json([
                'success' => 'Data Added Successfully.'
            ]);

        }
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

    public function edit_pengirim($id_pengirim = null){

        $pengirim = Pengirim::find($id_pengirim);
        // dd($skripsi);
        // die;
        
        return view ('skripsi.edit_pengirim', ['pengirim' => $pengirim]);

    }

    public function update_pengirim(Request $request, $id_pengirim = null){
        $this->validate($request,[
            'nama_pengirim' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required'
        ]);

        // $pengirim = Pengirim::find($id_pengirim);
        // $pengirim->nama_pengirim = $request->nama_pengirim;
        // $pengirim->no_telpon = $request->no_telpon;
        // $pengirim->alamat = $request->alamat;
        // $pengirim->save();
        // return redirect ('/pengirim');
        // return redirect();
        // update 
        $data = $request->all();
        $updatePengirim = Pengirim::find($id_pengirim);
        $updatePengirim->nama_pengirim = $data['nama_pengirim'];
        $updatePengirim->no_telpon = $data['no_telpon'];
        $updatePengirim->alamat = $data['alamat'];
        $updatePengirim->save();
        return redirect('/skripsi/pengirim');

    }

    
    function updatepengirim(Request $update, $id_pengirim = null){
        
        $data = $update->all();
        $pengirim = Pengirim::find($id_pengirim);
        $pengirim->nama_pengirim = $data['nama_pengirim'];
        $pengirim->no_telpon = $data['no_telpon'];
        $pengirim->alamat = $data['alamat'];
        $pengirim->save();

        // return "Succes Update";
      return redirect('/skripsi/pengirim');
    }

    public function hapus_pengirim($id_pengirim){

        $pengirim = Pengirim::find($id_pengirim);
        $pengirim->delete();

        return redirect ('/skripsi/pengirim');
    }

    public function edit_penerima($id_penerima = null){

        $penerima = Penerima::find($id_penerima);
        
        return view ('skripsi.edit_penerima', ['penerima' => $penerima]);

    }

    public function update_penerima(Request $request, $id_penerima = null){
        $this->validate($request,[
            'nama_penerima' => 'required',
            'no_telpon' => 'required',
            'alamat' => 'required'
        ]);

        // update 
        $data = $request->all();
        $updatePenerima = Penerima::find($id_penerima);
        $updatePenerima->nama_penerima = $data['nama_penerima'];
        $updatePenerima->no_telpon = $data['no_telpon'];
        $updatePenerima->alamat = $data['alamat'];
        $updatePenerima->save();

        return redirect('/skripsi/penerima');

    }

    
    function updatepenerima(Request $update, $id_penerima = null){
        
        $data = $update->all();
        $penerima = Penerima::find($id_penerima);
        $penerima->nama_penerima = $data['nama_penerima'];
        $penerima->no_telpon = $data['no_telpon'];
        $penerima->alamat = $data['alamat'];
        $penerima->save();

        // return "Succes Update";
      return redirect('/skripsi/penerima');
    }

    public function hapus_penerima($id_penerima){

        $penerima = Penerima::find($id_penerima);
        $penerima->delete();

        return redirect ('/skripsi/penerima');
    }


}