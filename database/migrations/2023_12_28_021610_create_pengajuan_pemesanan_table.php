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
        Schema::create('pengajuan_pemesanan', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('instansi', 100);
            $table->string('email', 50);
            $table->string('jenis_sawit', 30);
            $table->decimal('jumlah_ton', 7, 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_pemesanan');
    }
};
