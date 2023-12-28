<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PengajuanPemesananController;

class PengajuanPemesanan extends Model
{

    use HasFactory;

    protected $table = 'pengajuan_pemesanan';
    
    protected $fillable = ['nama', 'instansi', 'email', 'jenis_sawit', 'jumlah_ton'];

}
