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
    public function edit(PengelolaanKebun $pengelolaan)
    {
        return view('pengelolaan_perkebunan.index', compact('pengelolaan_perkebunan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PengelolaanKebun $pengelolaan)
    {

        DB::table('pengelolaan_kebun')->where('id',$request->id)->update([
            "tanggal_tanam" => $data['plant'],
            "tanggal_panen" => $data['harvest'],
            "jenis_bibit" => $data['seed'],
            "jenis_pupuk" => $data['fertilizer'],
            "jumlah_tanam" => $data['plantQty'],
            "jumlah_panen" => $data['harvestQty'],
            // "presentase_keberhasilan" => $data['persentase'],
            // "estimasi_jumlah_panen" => $data['estimasi'],
        ]);

        return redirect(route('pengelolaan_perkebunan.index'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PengelolaanKebun $pengelolaan)
    {
        // Storage::delete('public/foto/' .$pengelolaan->);
         DB::table('pengelolaan_kebun')->where('id',$request->id)->delete();
 
         $pengelolaan->delete();
 
         return redirect()->route('pengelolaan_perkebunan.index');
     }
 
}
