<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengirim extends Model
{
    // syntaks ini buat deklrasiin model kita mau berhubungan dengan table apa di database kita
    protected $table = 'pengirim';

    // deklarasi primary key 
    protected $primaryKey = 'id_pengirim';

    protected $guarded = [];

    public $timestamps = false;

    // karena primary keynya bukan increment(integer) kita harus set auto incrementnya tidak berjalan karena defaultnya primary key itu pakai integer bukan varchar
    public $incrementing = false;

    public function barang (){

        return $this->belongsTo('App\Barang');
    }
}
