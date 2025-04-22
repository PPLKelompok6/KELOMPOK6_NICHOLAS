@extends('layouts.app')

@section('title', 'Profile Dokter')
@section('content')
<div class="container mx-auto py-12 px-4 text-center">
    <div class="bg-gray-200 p-8 rounded-xl max-w-xl mx-auto">
        <img src="{{ $dokter->foto }}" class="w-24 h-24 rounded-full mx-auto mb-4">
        <h2 class="text-xl font-bold">{{ $dokter->nama }}</h2>
        <p class="text-gray-600">{{ $dokter->spesialis }}</p>
        <p class="text-gray-600 mb-4">{{ $dokter->telepon }}</p>

        <p class="mb-4 text-sm text-gray-700">Jadwal Konsultasi:</p>
        <table class="mx-auto mb-4">
            @foreach ($dokter->jadwal as $hari => $jam)
                <tr>
                    <td class="px-4 py-1 font-medium">{{ $hari }}</td>
                    <td class="px-4 py-1">{{ $jam }}</td>
                </tr>
            @endforeach
        </table>

        <button class="bg-gray-800 text-white px-4 py-2 rounded-md">Daftar</button>
    </div>
</div>
@endsection
