<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;
use App\Models\Jenis;

class KendaraanController extends Controller
{
    public function index()
    {
        $data_kendaraan = Kendaraan::with('jenis')->get();
        $data_jenis = Jenis::all();
        
        return view('kendaraan.index', compact('data_kendaraan', 'data_jenis'));
    }

    public function create()
    {
        $data_jenis = Jenis::all();
        return view('kendaraan.create', compact('data_jenis'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'merek' => 'required',
            'pemilik' => 'required',
            'nopolisi' => 'required',
            'thn_beli' => 'required|date',
            'jenis_id' => 'required|exists:jenis,id',
            'kapasitas_kursi' => 'nullable|integer',
            'rating' => 'nullable|integer',
            'deskripsi' => 'nullable',
        ]);

        Kendaraan::create($validated);

        return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil disimpan.');
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $data_jenis = Jenis::all();
        return view('kendaraan.edit', compact('kendaraan', 'data_jenis'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'merek' => 'required',
            'pemilik' => 'required',
            'nopolisi' => 'required',
            'thn_beli' => 'required|date',
            'jenis_id' => 'required|exists:jenis,id',
            'kapasitas_kursi' => 'nullable|integer',
            'rating' => 'nullable|integer',
            'deskripsi' => 'nullable',
        ]);

        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update($validated);

        return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil diedit.');
    }

    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil dihapus.');
    }

    public function show($id)
    {
        $kendaraan = Kendaraan::with('jenis')->findOrFail($id);
    return view('kendaraan.detail', compact('kendaraan'));
    }
}
