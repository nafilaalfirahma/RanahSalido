<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengelolaan_kebun', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_tanam');
            $table->date('tanggal_panen');
            $table->string('jenis_bibit');
            $table->string('jenis_pupuk');
            $table->integer('jumlah_tanam');
            $table->integer('jumlah_panen');
            $table->decimal('presentase_keberhasilan');
            $table->integer('estimasi_jumlah_panen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengelolaan_kebun');
    }
};
