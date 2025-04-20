<?php
use App\Http\Controllers\JadwalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonsultasiController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');

Route::get('/kontak/{id}', [KonsultasiController::class, 'kontak'])->name('konsultasi.kontak');
