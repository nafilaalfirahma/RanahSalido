<?php

namespace App\Http\Controllers;

use App\Models\KerjasamaInvestor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 


class KerjasamaInvestorController extends Controller
{
    //views

    public function index(){

        $kerjasamas = KerjasamaInvestor::all();

        return view('kerjasama/index', compact('kerjasamas'));
    
}

    public function create(){
        return view('kerjasama/create');
    }
    
    public function store(Request $request){

        $data = $request->validate([
            'nama' => ['required' , 'String'],
            'instansi' => ['required' , 'String'],
            'kebutuhan' => ['required' , 'String'],
            'kontak' => ['required' , 'String'],
            'jenis_kerjasama' => ['required', 'String'],

            ]); 
   

        KerjasamaInvestor::create([

            'nama' => $data['nama'], 
            'instansi' => $data['instansi'],
            'kebutuhan' => $data['kebutuhan'],
            'kontak' => $data['kontak'],
            'jenis_kerjasama' => $data['jenis_kerjasama'],

            ]);


        return redirect(route('kerjasama/index'));
 
        Log::info('Store method called');
        Log::info('Received data: ', $request->all());
       

    }

    public function update(Request $request, $id)
    {
        $kerjasama = KerjasamaInvestor::findOrFail($id);
        return view('kerjasama.update', compact('kerjasama'));
    }

    public function replace(Request $request, $id) {

        $kerjasama = KerjasamaInvestor::findOrFail($id);

        $kerjasama->nama = $request->nama;
        $kerjasama->instansi = $request->instansi;
        $kerjasama->kebutuhan = $request->kebutuhan;
        $kerjasama->kontak = $request->kontak;
        $kerjasama->jenis_kerjasama = $request->jenis_kerjasama;

        $kerjasama->save();

        return redirect(route('kerjasama/index'));

    }
      
    public function destroy($id)
    {
      $kerjasama = KerjasamaInvestor::findOrFail($id);
      $kerjasama->delete();

      return redirect(route('kerjasama/index'));


    }
   
   
    

}