<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengelolaanKebun extends Model
{
    use HasFactory;
    protected $fillable = ["tanggal_tanam", "tanggal_panen","jenis_bibit", "jenis_pupuk", "jumlah_tanam", "jumlah_panen", "presentase_keberhasilan", "estimasi_jumlah_panen"];
}
