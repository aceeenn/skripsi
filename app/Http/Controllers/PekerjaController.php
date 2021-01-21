<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model pekerja
use App\Pekerja;

class PekerjaController extends Controller
{

    // protected $table = "pengguna";

    public function index(){

        //mengambil data pekerja
        $pekerja = Pekerja::paginate(10);

        //mengirim data pekerja ke view pekerja
        return view('pekerja.pekerja', ['pekerja' =>$pekerja]);
    }

    public function tambah(){

        return view ('pekerja.tambah');
    }

    public function store(Request $request){

        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        Pekerja::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect ('/pekerja');
    }

    public function edit($id){

        $pekerja = Pekerja::find($id);
        
        return view ('pekerja.edit', ['pekerja' => $pekerja]);

    }

    public function update($id, Request $request){
        $this->validate($request,[
            'nama'=>'required',
            'alamat' => 'required'
        ]);

        $pekerja = Pekerja::find($id);
        $pekerja->nama = $request->nama;
        $pekerja->alamat = $request->alamat;
        $pekerja->save();

        return redirect ('/pekerja');

    }

    public function delete($id){

        $pekerja = Pekerja::find($id);
        $pekerja->delete();

        return redirect ('/pekerja');
    }

    public function trash(){
        
        $pekerja = Pekerja::onlyTrashed()->get();

        return view ('pekerja.trash', ['pekerja'=>$pekerja]);
    }

    public function kembalikan ($id){

        $pekerja = Pekerja::onlyTrashed()->where('id', $id);
        $pekerja->restore();

        return redirect('/pekerja/trash');
    }

    public function kembalikan_semua(){

        $pekerja = Pekerja::onlyTrashed();
        $pekerja->restore();

        return redirect ('/pekerja/trash');
    }

    public function hapus_permanen($id){

        $pekerja = Pekerja::onlyTrashed()->where('id', $id);
        $pekerja->forceDelete();

        return redirect('/pekerja/trash');
    }

    public function hapus_permanen_semua(){

        $pekerja = Pekerja::onlyTrashed();
        $pekerja->forceDelete();

        return redirect ('/pekerja/trash');
    }

    
    
}
