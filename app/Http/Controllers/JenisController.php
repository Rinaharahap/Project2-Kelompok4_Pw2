<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;

class JenisController extends Controller
{
    public function index()
    {
        $data_jenis = Jenis::all();
        return view('jenis.index', compact('data_jenis'));
    }

    public function create()
    {
        return view('jenis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Jenis::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('jenis.index')->with('success', 'Jenis berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jenis = Jenis::findOrFail($id);
        return view('jenis.edit', compact('jenis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $jenis = Jenis::findOrFail($id);
        $jenis->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('jenis.index')->with('success', 'Data Jenis berhasil di edit.');
    }

    public function destroy($id)
    {
        $jenis = Jenis::findOrFail($id);
        $jenis->delete();

        return redirect()->route('jenis.index')->with('success', 'Data Jenis berhasil dihapus.');
    }

    public function show($id)
    {
        $jenis = Jenis::findOrFail($id);
        return view('jenis.detail', compact('jenis'));
    }
}
