<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DynamicField;
use Validator;

class DynamicFieldController extends Controller
{
    function index (){

        return view ('dynamic_field');
    }

    function insert (Request $request){

        if ($request->ajax()){
            $rules= array(
                'nama_barang.*' => 'required',
                'berat_barang.*' => 'required',
                'panjang_barang.*' => 'required',
                'lebar_barang.*' => 'required',
                'tinggi_barang.*' => 'required',
                'jumlah_barang.*' => 'required',
                
            );

            $error = Validator::make ($request->all(), $rules);

            if($error->fails()){
                return response()->json([
                    'error' => $error->errors()->all()

                ]);
            }

            $nama_barang = $request->nama_barang;
            $berat_barang = $request->berat_barang;
            $panjang_barang = $request->panjang_barang;
            $lebar_barang = $request->lebar_barang;
            $tinggi_barang = $request->tinggi_barang;
            $jumlah_barang = $request->jumlah_barang;

            for ($count = 0; $count < count ($nama_barang); $count++){
                $data = array (
                    'nama_barang.*' => $nama_barang[$count],
                    'berat_barang.*' => $berat_barang[$count],
                    'panjang_barang.*' => $panjang_barang[$count],
                    'lebar_barang.*' => $lebar_barang[$count],
                    'tinggi_barang.*' => $tinggi_barang[$count],
                    'jumlah_barang.*' => $jumlah_barang[$count],
                );

                $insert_data[] = $data;
            }

            DynamicField::insert ($insert_data);

            return response()->json([
                'success' => 'Data Added Successfully.'
            ]);

        }
    }
}
