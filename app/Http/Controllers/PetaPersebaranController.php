<?php

namespace App\Http\Controllers;

use App\Models\PetePersebaran;
use Illuminate\Http\Request;

class PetaPersebaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $data = [
            'data_peta' => PetePersebaran::all()
        ];

        return view('admin.peta_persebaran', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_peta_persebaran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'lokasi' => 'required|string',
            'longitude' => 'required|string',
            'latitude' => 'required|string',
            'sektor' => 'required|string',
            'jenis_bibit' => 'required|string',
            'jumlah_bibit' => 'required|numeric',
            'luas_tanah' => 'required|integer', // Sesuaikan dengan kebutuhan

            // Tambahkan aturan validasi lain sesuai kebutuhan
        ]);

        PetePersebaran::create([
            'lokasi' => $request->lokasi,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'sektor' => $request->sektor,
            'jenis_bibit' => $request->jenis_bibit,
            'jumlah_bibit' => $request->jumlah_bibit,
            'luas_tanah' => $request->luas_tanah,
            // Sesuaikan dengan nama kolom dalam tabel Anda
        ]);

        // Redirect ke halaman lain dengan pesan sukses
        return redirect()->route('admin.peta_persebaran')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        $data = [
            'peta' => PetePersebaran::find($id)
        ];

        return view('admin.edit_peta_persebaran', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $peta = PetePersebaran::find($id);

        $request->validate([
            'lokasi' => 'required|string',
            'longitude' => 'required|string',
            'latitude' => 'required|string',
            'sektor' => 'required|string',
            'jenis_bibit' => 'required|string',
            'jumlah_bibit' => 'required|numeric',
            'luas_tanah' => 'required|integer', // Sesuaikan dengan kebutuhan

            // Tambahkan aturan validasi lain sesuai kebutuhan
        ]);

        $data = [
            'lokasi' => $request->lokasi,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'sektor' => $request->sektor,
            'jenis_bibit' => $request->jenis_bibit,
            'jumlah_bibit' => $request->jumlah_bibit,
            'luas_tanah' => $request->luas_tanah,
            // Sesuaikan dengan nama kolom dalam tabel Anda
        ];

        $peta->update($data);

        // Redirect ke halaman lain dengan pesan sukses
        return redirect()->route('admin.peta_persebaran')->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //

        $peta = PetePersebaran::find($id);

        $peta->delete();

        return redirect()->route('admin.peta_persebaran')->with('success', 'Data berhasil disimpan!');
    }

    public function peta_persebaran()
    {

        $data = [
            'marker' => PetePersebaran::all()
        ];


        return view('peta_persebaran', $data);
    }
}
