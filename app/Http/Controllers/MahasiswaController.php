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


}
