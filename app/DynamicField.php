<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicField extends Model
{
    protected $fillabel = [
        'first_name', 'last_name'
        // 'nama_barang', 
        // 'berat_barang',
        // 'panjang_barang',
        // 'lebar_barang',
        // 'tinggi_barang',
        // 'jumlah_barang'
    ];
}
