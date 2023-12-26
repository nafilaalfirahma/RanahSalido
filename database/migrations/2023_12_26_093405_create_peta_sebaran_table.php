<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetaSebaranTable extends Migration
{
    public function up()
    {
        Schema::create('peta_sebaran', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi', 100);
            $table->text('longitude');
            $table->text('latitude');
            $table->string('sektor', 10);
            $table->string('jenis_bibit', 50);
            $table->integer('jumlah_bibit');
            $table->decimal('luas_tanah', 7, 0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peta_sebaran');
    }
}
