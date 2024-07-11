<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Kendaraan;
use App\Models\AreaParkir;

class TransaksiController extends Controller
{
    public function index()
    {
        $data_transaksi = Transaksi::with('kendaraan', 'areaParkir')->get();
        $data_kendaraan = Kendaraan::all();
        $data_area_parkir = AreaParkir::all();
        
        return view('transaksi.index', compact('data_transaksi', 'data_kendaraan', 'data_area_parkir'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'mulai' => 'required|date_format:H:i',
            'berakhir' => 'required|date_format:H:i',
            'keterangan' => 'nullable',
            'biaya' => 'required|numeric',
            'kendaraan_id' => 'required|exists:kendaraan,id',
            'area_parkir_id' => 'required|exists:area_parkir,id',
        ]);

        Transaksi::create($validatedData);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $data_kendaraan = Kendaraan::all();
        $data_area_parkir = AreaParkir::all();
        return view('transaksi.edit', compact('transaksi', 'data_kendaraan', 'data_area_parkir'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'mulai' => 'required|date_format:H:i',
            'berakhir' => 'required|date_format:H:i',
            'keterangan' => 'nullable',
            'biaya' => 'required|numeric',
            'kendaraan_id' => 'required|exists:kendaraan,id',
            'area_parkir_id' => 'required|exists:area_parkir,id',
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($validatedData);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diedit');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil dihapus.');
    }

    public function show($id)
    {
        $transaksi = Transaksi::with(['kendaraan', 'areaParkir'])->findOrFail($id);
        return view('transaksi.detail', compact('transaksi'));
    }
}
