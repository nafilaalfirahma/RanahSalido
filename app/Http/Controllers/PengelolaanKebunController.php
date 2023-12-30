<?php

namespace App\Http\Controllers;

use App\Models\PengelolaanKebun;
use Illuminate\Http\Request;

class PengelolaanKebunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengelolaan = PengelolaanKebun::all(); //ambil data 
        return view('pengelolaan_perkebunan.index', compact('pengelolaan')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengelolaan_perkebunan.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        PengelolaanKebun::create([
            "tanggal_tanam" => $data['plant'],
            "tanggal_panen" => $data['harvest'],
            "jenis_bibit" => $data['seed'],
            "jenis_pupuk" => $data['fertilizer'],
            "jumlah_tanam" => $data['plantQty'],
            "jumlah_panen" => $data['harvestQty'],
            "presentase_keberhasilan" => $data['persentase'],
            "estimasi_jumlah_panen" => $data['estimasi'],
        ]);


        return redirect(route('pengelolaan_perkebunan.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(PengelolaanKebun $pengelolaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PengelolaanKebun $pengelolaan, $id)
    {
        $pengelolaan = PengelolaanKebun::findOrFail($id);
        return view('pengelolaan_perkebunan.update', compact('pengelolaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PengelolaanKebun $pengelolaan, $id)
    {
       $pengelolaan = PengelolaanKebun::findOrFail($id);

       $pengelolaan->tanggal_tanam = $request->tanggal_tanam;
       $pengelolaan->tanggal_panen = $request->tanggal_panen;
       $pengelolaan->jenis_bibit = $request->jenis_bibit;
       $pengelolaan->jenis_pupuk = $request->jenis_pupuk;
       $pengelolaan->jumlah_tanam = $request->jumlah_tanam;
       $pengelolaan->jumlah_panen = $request->jumlah_panen;
       $pengelolaan->presentase_keberhasilan = $request->presentase_keberhasilan;
       $pengelolaan->estimasi_jumlah_panen = $request->estimasi_jumlah_panen;

       $pengelolaan->save();

       
    //    $pengelolaan->update([
    //        "tanggal_tanam" => $request->input('plant'),
    //        "tanggal_panen" => $request->input('harvest'),
    //        "jenis_bibit" => $request->input('seed'),
    //        "jenis_pupuk" => $request->input('fertilizer'),
    //        "jumlah_tanam" => $request->input('plantQty'),
    //        "jumlah_panen" => $request->input('harvestQty'),
    //        "presentase_keberhasilan" => $request->input('persentase'),
    //        "estimasi_jumlah_panen" => $request->input('estimasi'),
    //    ]);
    
       return redirect(route('pengelolaan_perkebunan.index'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PengelolaanKebun $pengelolaan,$id)
    {
        // PengelolaanKebun::getTable('pengelolaan_kebun')->where('id',$request->id)->delete();
 
        //  $pengelolaan->delete();
 
        //  return redirect()->route('pengelolaan_perkebunan.index');
        PengelolaanKebun::destroy($id);
        PengelolaanKebun::where('id', $id)->delete();

        return redirect(route('pengelolaan_perkebunan.index'));

     }
 
}
