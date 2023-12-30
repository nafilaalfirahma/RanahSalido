<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiPasar extends Model
{
    use HasFactory;

    protected $table = 'informasi_pasar';
    protected $fillable = ['periode_waktu', 'jenis_sawit', 'lokasi', 'harga_per_kilo', 'analisis_pasar'];
}
