<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanPemesanan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan_pemesanan';
    
    protected $fillable = [
        'id',
        'nama',
        'instansi',
        'email',
        'jenis_sawit',
        'jumlah_ton',
        'created_at',
        'updated_at',
    ];

}
