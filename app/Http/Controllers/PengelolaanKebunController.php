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

    public function indexUser()
    {
        $pengelolaan = PengelolaanKebun::all(); //ambil data 
        return view('pengelolaan_perkebunan.indexUser', compact('pengelolaan')); 
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
            "tanggal_tanam" => $data['tanggal_tanam'],
            "tanggal_panen" => $data['tanggal_panen'],
            "jenis_bibit" => $data['jenis_bibit'],
            "jenis_pupuk" => $data['jenis_pupuk']?? '-',
            "jumlah_tanam" => $data['jumlah_tanam'],
            "jumlah_panen" => $data['jumlah_panen']?? '0',
            "presentase_keberhasilan" => $data['jumlah_panen']/($data['jumlah_tanam']*41)*100,
            "estimasi_jumlah_panen" => $data['jumlah_tanam']*41,
        ]);
        
        session()->flash('message', 'Data Berhasil Dibuat!');

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
    public function edit($id)
    {
        $pengelolaan = PengelolaanKebun::find($id);
        return view('pengelolaan_perkebunan.update', compact('pengelolaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PengelolaanKebun $pengelolaan, $id)
    {
        $request->validate([
            "tanggal_tanam" => 'required',
            "tanggal_panen" => 'required',
            "jenis_bibit" => 'required',
            "jenis_pupuk" => 'required',
            "jumlah_tanam" => 'required|numeric',
            "jumlah_panen" => 'required|numeric',
            // "presentase_keberhasilan" => 'numeric',
            // "estimasi_jumlah_panen" =>'numeric',
        ]);

        $data= ([
            "tanggal_tanam" => $request->tanggal_tanam,
            "tanggal_panen" => $request->tanggal_panen,
            "jenis_bibit" => $request->jenis_bibit,
            "jenis_pupuk" => $request->jenis_pupuk,
            "jumlah_tanam" => $request->jumlah_tanam,
            "jumlah_panen" => $request->jumlah_panen,
            "presentase_keberhasilan" => ($request->jumlah_panen)/(($request->jumlah_tanam)*41)*100,
            "estimasi_jumlah_panen" => ($request->jumlah_tanam)*41,
        ]);

        $pengelolaan = PengelolaanKebun::find($id);

        $pengelolaan->update($data);

        session()->flash('message', 'Data Berhasil Diedit!');
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

        session()->flash('message', 'Data Berhasil Dihapus!');
        return redirect(route('pengelolaan_perkebunan.index'));

     }
     
}
