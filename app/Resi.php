<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resi extends Model
{
    // 
    protected $table = 'resi';

    protected $primaryKey = 'id_resi';

    protected $guarded = [];

    public $incrementing = false;

    public $timestamps = false;

    public function transaksi(){

        return $this->hasMany('App\Transaksi', 'id_resi');
    }
}
