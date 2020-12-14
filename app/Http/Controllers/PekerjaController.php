<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model pekerja
use App\Pekerja;

class PekerjaController extends Controller
{

    public function index(){

        //mengambil data pekerja
        $pekerja = Pekerja::paginate(10);

        //mengirim data pekerja ke view pekerja
        return view ('pekerja.pekerja', ['pekerja' =>$pekerja]);
    }
    
}
