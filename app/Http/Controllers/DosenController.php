<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Sentosa";

        $hobby = ["Basket", "Futsal", "Gaming", "Sleeping", "Eating", "Hibernasi"];


        return view ('biodata', ['nama' => $nama, 'hobby' => $hobby]);
    }
}
