<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

//panggil model Skripsi
use App\Skripsi;
use App\Penerima;
use App\Pengirim;
use App\Barang;
use App\Resi;
use App\Transaksi;
use Str;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class SkripsiController extends Controller
{

    public function index(){
        return view ('skripsi.index');
    }

    public function cari(Request $request){

        $cari = $request->cari;
        $resi = DB::table('resi')->where('id_resi', 'like', "%".$cari."%")->paginate();

        // dd($resi);
        // die;
        return view ('skripsi.search', ['resi'=>$resi]);
    }

    public function list_resi(){

        $resi = Transaksi::with('resi')->get();

        return view ('skripsi.list_resi', ['resi'=>$resi]);
    }

    public function laporan_penerimaan(){

        $resi = Transaksi::with('resi')->get();

        return view ('skripsi.laporan_penerimaan', ['resi'=>$resi]);
    }

    public function laporan_pengiriman(){

        $resi = Transaksi::with('resi')->get();

        return view ('skripsi.laporan_pengiriman', ['resi'=>$resi]);
    }

    public function tambah_resi(){

        $pengirim = Pengirim::get()->all();
        $penerima = Penerima::get()->all();

        return view ('skripsi.tambah_resi', ['pengirim'=>$pengirim, 'penerima' => $penerima]);
    }

    public function store_resi(Request $request){

        $data = $request->all();
        
        $kode_resi = Resi::get()->count();
        if($kode_resi <= 0){
            $kode = $kode_resi+1;
            // $kode = 0;
        } else {
            $kodeResi = Resi::orderBy('id_resi', 'DESC')->first();
            $kode1 = \substr($kodeResi['id_resi'], -4);
            $kode = intval($kode1);
            $kode++;
        }
        
        $id_resi = \str_pad($kode, 4, "0", STR_PAD_LEFT);

        // FUNCTION CREATE ID 
        $kodeAwal = "STS";
        $kodeTahun = date('y');
        $kodeTahunFinal = \substr($kodeTahun, -2);
        $kodeBulan = date('m');

        $final_id = "$kodeAwal$kodeTahunFinal$kodeBulan$id_resi";

        //input resi
        $createResi = new Resi;
        $createResi->id_resi = $final_id;
        $createResi->nama_pengirim = $data['nama_pengirim'];
        $createResi->nama_penerima = $data['nama_penerima'];
        $createResi->tgl_pengiriman = $data['tgl_pengiriman'];
        $createResi->no_container = $data['no_container'];
        $createResi->no_sj = $data['no_sj'];
        $createResi->nama_kapal = $data['nama_kapal'];
        $createResi->tgl_kapal = $data['tgl_kapal'];
        
        $createResi->save();    

        $id_resi1 = Resi::get()->last();

        // dd($data);
        // die;
       
        // data set transaksi 
        $mutiple_data = [];
        foreach($data['nama_barang'] as $item => $value){
            $mutiple_data[ ] = [
                'id_resi' => $id_resi1->id_resi,
                'nama_barang' => $data['nama_barang'][$item],
                'satuan_barang' => $data['satuan_barang'][$item],
                'jumlah_barang' => $data['jumlah_barang'][$item],
                'berat_barang' => $data['berat_barang'][$item],
                'panjang_barang' => $data['panjang_barang'][$item],
                'lebar_barang' => $data['lebar_barang'][$item],
                'tinggi_barang' => $data['tinggi_barang'][$item],
            ];
         }

        Transaksi::create($mutiple_data);
    
        return redirect()->back();

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

    public function export_excel(){

        return Excel::download(new LaporanExport(), 'laporan.xlsx');
    }

}