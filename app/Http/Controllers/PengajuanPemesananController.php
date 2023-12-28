<?php

namespace App\Http\Controllers;

use App\Models\PengajuanPemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 


class PengajuanPemesananController extends Controller
{
    //views

    public function index(){

        $pemesanans = PengajuanPemesanan::all();

        return view('pemesanan/index', compact('pemesanans'));
    
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
            'jumlah_ton' => ['required', 'numeric'],

            ]); 
   

        PengajuanPemesanan::create([

            'nama' => $data['nama'], 
            'instansi' => $data['instansi'],
            'email' => $data['email'],
            'jenis_sawit' => $data['jenis_sawit'],
            'jumlah_ton' => $data['jumlah_ton'],

            ]);


        return redirect(route('pemesanan/index'));
 
        Log::info('Store method called');
        Log::info('Received data: ', $request->all());
       

    }

    public function update(Request $request, $id)
    {
        $pemesanan = PengajuanPemesanan::findOrFail($id);
        return view('pemesanan.update', compact('pemesanan'));
    }

    public function replace(Request $request, $id) {

        $pemesanan = PengajuanPemesanan::findOrFail($id);

        $pemesanan->nama = $request->nama;
        $pemesanan->instansi = $request->instansi;
        $pemesanan->email = $request->email;
        $pemesanan->jenis_sawit = $request->jenis_sawit;
        $pemesanan->jumlah_ton = $request->jumlah_ton;

        $pemesanan->save();

        return redirect(route('pemesanan/index'));

    }
      
    public function destroy($id)
    {
      $pemesanan = PengajuanPemesanan::findOrFail($id);
      $pemesanan->delete();

      return redirect(route('pemesanan/index'));


    }
   
   
    

}