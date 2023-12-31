<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\KerjasamaInvestorController;

class KerjasamaInvestor extends Model
{

    use HasFactory;

    protected $table = 'kerjasama_investor';
    
    protected $fillable = ['nama', 'instansi', 'kebutuhan', 'kontak', 'jenis_kerjasama'];

}
