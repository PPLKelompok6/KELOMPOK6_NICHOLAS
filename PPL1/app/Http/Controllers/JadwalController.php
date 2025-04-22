<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class JadwalController extends Controller
{

    public function index()
    {
        return view('jadwal.index', [
            'dokterUmum' => Dokter::where('spesialis', 'Dokter Umum')->get(),
            'dokterGigi' => Dokter::where('spesialis', 'Dokter Gigi')->get(),
            'psikologi' => Dokter::where('spesialis', 'Psikologi')->get(),
            'dokterGigiSpesialis' => Dokter::where('spesialis', 'Dokter Gigi Spesialis')->get(),
        ]);
    }
    
public function profileD($id)
{
    $dokter = Dokter::findOrFail($id);
    return view('profileD', compact('dokter'));
}
}
