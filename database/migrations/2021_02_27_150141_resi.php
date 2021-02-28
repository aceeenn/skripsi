<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Resi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resi', function (Blueprint $table) {
            $table->string('id_resi', 11)->unique();
            $table->string('id_pengirim');
            $table->string('id_penerima');
            $table->date('tgl_pengiriman');
            $table->string('no_container', 12);
            $table->string('no_sj', 20);
            $table->string('nama_kapal', 20);
            $table->date('tgl_kapal');
            $table->date('tgl_sandar')->nullable();
            $table->date('tgl_antar')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resi');
    }
}
