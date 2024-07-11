<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kampus;

class KampusController extends Controller
{
    public function index()
    {
        $data_kampus = Kampus::all(); // Mengambil semua data kampus dari model Kampus

        return view('kampus.index', compact('data_kampus'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255', // Sesuaikan maksimal dengan definisi di tabel
            'alamat' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        Kampus::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return redirect()->route('kampus.index')->with('success', 'Data kampus berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kampus = Kampus::findOrFail($id);
        return view('kampus.edit', compact('kampus'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255', // Sesuaikan maksimal dengan definisi di tabel
            'alamat' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        $kampus = Kampus::findOrFail($id);
        $kampus->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        return redirect()->route('kampus.index')->with('success', 'Data Kampus berhasil di edit.');
    }

    public function destroy($id)
    {
        $kampus = Kampus::findOrFail($id);
        $kampus->delete();

        return redirect()->route('kampus.index')->with('success', 'Data Kampus berhasil dihapus.');
    }

    public function show($id)
    {
        $kampus = Kampus::findOrFail($id);
        return view('kampus.detail', compact('kampus'));
    }


}
