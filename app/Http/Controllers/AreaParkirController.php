<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AreaParkir;
use App\Models\Kampus;

class AreaParkirController extends Controller
{
    public function index()
    {
        $data_area_parkir = AreaParkir::with('kampus')->orderBy('id', 'asc')->get();
        $data_kampus = Kampus::all();
        
        return view('area_parkir.index', compact('data_area_parkir', 'data_kampus'));
    }

    public function create()
    {
        $data_kampus = Kampus::all();
        return view('area_parkir.create', compact('data_kampus'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'kapasitas' => 'required|integer',
            'keterangan' => 'required|string',
            'kampus_id' => 'required|exists:kampus,id'
        ]);

        AreaParkir::create($validatedData);

        return redirect()->route('area_parkir.index')->with('success', 'Data area parkir berhasil disimpan.');
    }

    public function edit($id)
    {
        $area_parkir = AreaParkir::findOrFail($id);
        $data_kampus = Kampus::all(); 
        return view('area_parkir.edit', compact('area_parkir', 'data_kampus'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'kapasitas' => 'required|integer',
            'keterangan' => 'required|string',
            'kampus_id' => 'required|exists:kampus,id'
        ]);

        $area_parkir = AreaParkir::findOrFail($id);
        $area_parkir->update($validatedData);

        return redirect()->route('area_parkir.index')->with('success', 'Data area parkir berhasil diedit.');
    }

    public function destroy($id)
    {
        $area_parkir = AreaParkir::findOrFail($id);
    $area_parkir->delete();

    return redirect()->route('area_parkir.index')->with('success', 'Data area parkir berhasil dihapus.');
    }

    public function show($id)
{
    $area_parkir = AreaParkir::with('kampus')->findOrFail($id);
    return view('area_parkir.detail', compact('area_parkir'));
}


}
