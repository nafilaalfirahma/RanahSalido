<?php

namespace App\Http\Controllers;

use App\Models\PengajuanPemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Facades\Auth;


class PengajuanPemesananController extends Controller
{
    //views

    // public function indexUser(){

    //     $userId = Auth::id(); // Get the ID of the currently authenticated user
    //     $pemesanans = PengajuanPemesanan::where('user_id', $userId)->get(); // Get the orders of the user

    //     return view('pemesanan/indexUser', compact('pemesanans'));
        
    //     // $pemesanans = PengajuanPemesanan::all();
    //     // return view('pemesanan/indexUser', compact('pemesanans'));
    
    // }

    //Create 
    public function create(){
        return view('pemesanan/create');
    }
    
    public function store(Request $request){

        // if (Auth::check()) {
        
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

            session()->flash('message', 'Pemesanan berhasil diajukan!');
            return redirect(route('pemesanan.create'));
 
        // } else { 

        //     return redirect()->route('login');
        // }

        Log::info('Store method called');
        Log::info('Received data: ', $request->all());
       

    }

    public function index(){

        $pemesanans = PengajuanPemesanan::all();

        return view('pemesanan.index', compact('pemesanans'));
    
    }

    // show update page
    public function update(Request $request, $id)
    {
        $pemesanan = PengajuanPemesanan::findOrFail($id);
        return view('pemesanan.update', compact('pemesanan'));
    }

    // Assign Value After Changes
    public function replace(Request $request, $id) {

        $pemesanan = PengajuanPemesanan::findOrFail($id);

        $pemesanan->nama = $request->nama;
        $pemesanan->instansi = $request->instansi;
        $pemesanan->email = $request->email;
        $pemesanan->jenis_sawit = $request->jenis_sawit;
        $pemesanan->jumlah_ton = $request->jumlah_ton;

        $pemesanan->save();

        return redirect(route('pemesanan.index'));

    }
    
    // Delete
    public function destroy($id) {
      $pemesanan = PengajuanPemesanan::findOrFail($id);
      $pemesanan->delete();

      return redirect(route('pemesanan.index'));


    }
   
    

}