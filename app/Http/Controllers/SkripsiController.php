<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//panggil model pekerja
// use App\Skripsi;

class SkripsiController extends Controller
{

    public function index(){

        return view ('skripsi.index');
    }

    public function barang(){

        return view('skripsi.barang');
    }

    public function penerima(){

        return view ('skripsi.penerima');
    }

    public function pengirim(){

        return view ('skripsi.pengirim');
    }

}