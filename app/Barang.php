<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Barang extends Model
// class Barang extends Migration
{

    // public function down (){
    //     Schema::dropIfExists('dynamic_fields');
    // }

    // syntaks ini buat deklrasiin model kita mau berhubungan dengan table apa di database kita
    protected $table = 'barang';

    // deklarasi primary key 
    protected $primaryKey = 'id_barang';

    protected $guarded = [];

    // protected $fillable = ['id_barang'];

    public $timestamps = false;

    // karena primary keynya bukan increment(integer) kita harus set auto incrementnya tidak berjalan karena defaultnya primary key itu pakai integer bukan varchar
    public $incrementing = false;

    // public function penerima (){
        
    //     return $this->hasMany('App\Penerima');
        
    // }

    public function transaksis(){
        
        return $this->hasMany('App\Transaksi');
        
    }
}
