<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class AdminDokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::all();
        return view('admin.index', compact('dokters'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'spesialis' => 'required|string|max:255',
        'telepon' => 'nullable|string|max:20',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'senin' => 'nullable|string',
        'selasa' => 'nullable|string',
        'rabu' => 'nullable|string',
        'kamis' => 'nullable|string',
        'jumat' => 'nullable|string',
    ]);

    if ($request->hasFile('foto')) {
        $fotoPath = $request->file('foto')->store('images', 'public');
        $validated['foto'] = '/storage/' . $fotoPath;
    }

    Dokter::create($validated);

    return redirect()->route('admin.index')->with('success', 'Dokter berhasil ditambahkan!');
}

    public function edit($id)
{
    $dokter = Dokter::findOrFail($id);
    return view('admin.edit', compact('dokter'));
}

    public function update(Request $request, $id)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'spesialis' => 'required|string|max:255',
        'telepon' => 'nullable|string|max:20',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'senin' => 'nullable|string',
        'selasa' => 'nullable|string',
        'rabu' => 'nullable|string',
        'kamis' => 'nullable|string',
        'jumat' => 'nullable|string',
    ]);

    $dokter = Dokter::findOrFail($id);

    if ($request->hasFile('foto')) {
        $fotoPath = $request->file('foto')->store('foto_dokter', 'public');
        $validated['foto'] = '/storage/' . $fotoPath;
    }

    $dokter->update($validated);

    return redirect()->route('admin.index')->with('success', 'Dokter berhasil diupdate!');
}

    public function destroy($id)
{
    $dokter = Dokter::findOrFail($id);
    $dokter->delete();

    return redirect()->route('admin.index')->with('success', 'Dokter berhasil dihapus!');
}



}
