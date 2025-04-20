<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class KonsultasiController extends Controller
{
    public function kontak($id)
{
    $dokter = Dokter::findOrFail($id);
    return view('kontak', compact('dokter'));
}
}
