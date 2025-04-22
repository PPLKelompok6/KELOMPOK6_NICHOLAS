<?php
use App\Http\Controllers\JadwalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileDokterController;

Route::get('/', function () {
    return redirect()->route('jadwal.index');
})->name('home');


Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');

Route::get('/profileD/{id}', [ProfileDokterController::class, 'profileD'])->name('profileD.index');
