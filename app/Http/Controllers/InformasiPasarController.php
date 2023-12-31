<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InformasiPasar;

class InformasiPasarController extends Controller
{
    public function index()
    {
        $InformasiPasar = InformasiPasar::all();
        return view('informasi_pasar.index', compact('InformasiPasar'));
    }

    public function create()
    {
        return view('informasi_pasar.create');
    }

    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $validatedData = $request->validate([
            'periode_waktu' => ['required', 'date'],
            'jenis_sawit' => ['required','string'],
            'lokasi' => ['required', 'string'],
            'harga_per_kilo' => ['required','integer'],
            'analisis_pasar' => ['required','string'],
        ]);

        InformasiPasar::create($validatedData);

        return redirect('/informasi_pasar/index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show($id)
    {
        $InformasiPasar = InformasiPasar::find($id);
        return view('informasi_pasar.show', compact('InformasiPasar'));
    }

    public function edit($id)
    {
        $InformasiPasar = InformasiPasar::findOrFail($id);
        return view('informasi_pasar.edit', compact('InformasiPasar'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input jika diperlukan
        $validatedData = $request->validate([
            'periode_waktu' => 'required',
            'jenis_sawit' => 'required',
            'lokasi' => 'required',
            'harga_per_kilo' => 'required|numeric',
            'analisis_pasar' => 'required',
        ]);

        InformasiPasar::whereId($id)->update($validatedData);

        return redirect('informasi_pasar/index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        InformasiPasar::findOrFail($id)->delete();

        return redirect('informasi_pasar/index')->with('success', 'Data berhasil dihapus.');
    }
}

