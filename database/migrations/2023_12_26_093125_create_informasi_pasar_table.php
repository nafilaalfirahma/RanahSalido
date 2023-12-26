<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiPasarTable extends Migration
{
    public function up()
    {
        Schema::create('informasi_pasar', function (Blueprint $table) {
            $table->id();
            $table->timestamp('periode_waktu')->useCurrent();
            $table->string('jenis_sawit', 50);
            $table->string('lokasi', 100);
            $table->integer('harga_per_kilo');
            $table->decimal('analisis_pasar', 7, 0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('informasi_pasar');
    }
}
