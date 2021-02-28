<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->increments('id_transaksi');
            $table->string('id_resi', 11);
            $table->string('nama_barang', 20);
            $table->string('satuan_barang', 4);
            $table->integer('jumlah_barang');
            $table->decimal('berat_barang', 5,2 );
            $table->decimal('panjang_barang', 5,2 );
            $table->decimal('lebar_barang', 5,2 );
            $table->decimal('tinggi_barang', 5,2 );

            $table->foreign('id_resi')->references('id_resi')->on('resi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
