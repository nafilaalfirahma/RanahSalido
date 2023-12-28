<?php

namespace App\Http\Controllers;

use App\Models\PengajuanPemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 


class PengajuanPemesananController extends Controller
{
    //views

    public function index(){

        $pemesanan = PengajuanPemesanan::all();

        return view('pemesanan/index', compact('pemesanan'));
    
}

    public function create(){
        return view('pemesanan/create');
    }
    
    public function store(Request $request){

        $data = $request->validate([
            'nama' => ['required' , 'String'],
            'instansi' => ['required' , 'String'],
            'email' => ['required' , 'String'],
            'jenis_sawit' => ['required' , 'String'],
            'jumlah_ton' => ['required', 'Decimal:2'],

            ]); 
   

        PengajuanPemesanan::create([

            'nama' => $data['nama'], 
            'instansi' => $data['instansi'],
            'email' => $data['email'],
            'jenis_sawit' => $data['jenis_sawit'],
            'jumlah_ton' => $data['jumlah_ton'],

            ]);


        return redirect(route('pemesanan/index'));
  

    }


    

}