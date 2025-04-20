<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class JadwalController extends Controller
{

    public function index()
    {
        return view('jadwal', [
            'dokterUmum' => Dokter::where('spesialis', 'Dokter Umum')->get(),
            'dokterGigi' => Dokter::where('spesialis', 'Dokter Gigi')->get(),
            'psikolog' => Dokter::where('spesialis', 'Psikolog')->get(),
            'dokterGigiSpesialis' => Dokter::where('spesialis', 'Dokter Gigi Spesialis')->get(),
        ]);
    }
    
public function kontak($id)
{
    $dokter = Dokter::findOrFail($id);
    return view('kontak', compact('dokter'));
}
}
