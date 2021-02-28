<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{

    protected $table = 'transaksi';

    protected $primaryKey = 'id_transaksi';

    protected $guarded = [];

    public $incrementing = false;

    public $timestamps = false;

    public function resi(){

        return $this->belongsTo('App\Resi', 'id_resi');
    }
    
}
