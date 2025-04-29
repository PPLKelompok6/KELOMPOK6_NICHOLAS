
@extends('layouts.app')

@section('title', 'Jadwal Dokter')
@section('content')
<div class="container mx-auto py-12 px-4">
    <h1 class="text-3xl font-bold text-center mb-2">Jadwal Praktek</h1>

    <h2 class="text-xl font-semibold text-center mb-8">Dokter Umum</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-12">
        <p>Dokter Umum: {{ $dokterUmum->count() }}</p>
        @foreach ($dokterUmum as $dokter)
            <div class="bg-gray-100 p-6 rounded-xl text-center shadow-md">
                <img src="{{ $dokter->foto }}" alt="{{ $dokter->nama }}" class="mx-auto w-20 h-20 rounded-full object-cover mb-4">
                <h3 class="font-bold text-lg">{{ $dokter->nama }}</h3>
                <p class="text-sm text-gray-600 mb-4">{{ $dokter->spesialis }}</p>
                <ul class="text-sm text-gray-800 mb-4">
                    @foreach ($dokter->jadwal as $hari => $jam)
                        <li>{{ $hari }}: {{ $jam }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('konsultasi.kontak', $dokter->id) }}" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">
                    Daftar Konsultasi
                </a>
                
            </div>
        @endforeach
    </div>

    <h2 class="text-xl font-semibold text-center mb-8">Dokter Gigi</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <p>Dokter Gigi: {{ $dokterGigi->count() }}</p>
        @foreach ($dokterGigi as $dokter)
            <div class="bg-gray-100 p-6 rounded-xl text-center shadow-md">
                <img src="{{ $dokter->foto }}" alt="{{ $dokter->nama }}" class="mx-auto w-20 h-20 rounded-full object-cover mb-4">
                <h3 class="font-bold text-lg">{{ $dokter->nama }}</h3>
                <p class="text-sm text-gray-600 mb-4">{{ $dokter->spesialis }}</p>
                <ul class="text-sm text-gray-800 mb-4">
                    @foreach ($dokter->jadwal as $hari => $jam)
                        <li>{{ $hari }}: {{ $jam }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('konsultasi.kontak', $dokter->id) }}" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">
                    Daftar Konsultasi
                </a>
                
            </div>
        @endforeach
    </div>

    <h2 class="text-xl font-semibold text-center mb-8">Psikolog</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-12">
        <p>Psikolog: {{ $psikolog->count() }}</p>
        @foreach ($psikolog as $dokter)
            <div class="bg-gray-100 p-6 rounded-xl text-center shadow-md">
                <img src="{{ $dokter->foto }}" alt="{{ $dokter->nama }}" class="mx-auto w-20 h-20 rounded-full object-cover mb-4">
                <h3 class="font-bold text-lg">{{ $dokter->nama }}</h3>
                <p class="text-sm text-gray-600 mb-4">{{ $dokter->spesialis }}</p>
                <ul class="text-sm text-gray-800 mb-4">
                    @foreach ($dokter->jadwal as $hari => $jam)
                        <li>{{ $hari }}: {{ $jam }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('konsultasi.kontak', $dokter->id) }}" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">
                    Daftar Konsultasi
                </a>
                
            </div>
        @endforeach
    </div>

    <h2 class="text-xl font-semibold text-center mb-8">Dokter Gigi Spesialis</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-12">
        <p>Gigi Spesialis: {{ $dokterGigiSpesialis->count() }}</p>
        @foreach ($dokterGigiSpesialis as $dokter)
            <div class="bg-gray-100 p-6 rounded-xl text-center shadow-md">
                <img src="{{ $dokter->foto }}" alt="{{ $dokter->nama }}" class="mx-auto w-20 h-20 rounded-full object-cover mb-4">
                <h3 class="font-bold text-lg">{{ $dokter->nama }}</h3>
                <p class="text-sm text-gray-600 mb-4">{{ $dokter->spesialis }}</p>
                <ul class="text-sm text-gray-800 mb-4">
                    @foreach ($dokter->jadwal as $hari => $jam)
                        <li>{{ $hari }}: {{ $jam }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('konsultasi.kontak', $dokter->id) }}" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700">
                    Daftar Konsultasi
                </a>
                
            </div>
        @endforeach
    </div>
</div>
@endsection
