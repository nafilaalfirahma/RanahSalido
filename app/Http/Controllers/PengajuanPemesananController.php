<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanPemesanan;



class PengajuanPemesananController extends Controller
{
    //

    public function create(){
        return view('pemesanan/create');
    }
    
    public function store(Request $request){
        $data = $request->all();
        PengajuanPemesanan::create([
            'nama' => $data['nama'],
            'instansi' => $data['instansi'],
            'email' => $data['email'],
            'jenis_sawit' => $data['jenis_sawit'],
            'jumlah_ton' => $data['jumlah_ton'],
        ]);
        return redirect(route('pemesanan.index'));
    }


    public function index(){
        $pemesanan = PengajuanPemesanan::all();
        return view('pemesanan/index', compact('pemesanan'));
    

}

}