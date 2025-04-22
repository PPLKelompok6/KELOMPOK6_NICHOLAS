<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class ProfileDokterController extends Controller
{
    public function profileD($id)
{
    $dokter = Dokter::findOrFail($id);
    return view('profileD.index', compact('dokter'));
}
}
