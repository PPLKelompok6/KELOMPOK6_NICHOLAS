<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    public function run(): void
    {
        Dokter::create([
            'nama' => 'dr. Andi',
            'spesialis' => 'Dokter Umum',
            'telepon' => '081234567890',
            'foto' => 'https://via.placeholder.com/150',
            'senin' => '09:00 - 11:00',
            'selasa' => '10:00 - 12:00',
            'rabu' => '-',
            'kamis' => '-',
            'jumat' => '09:00 - 11:00',
        ]);
        Dokter::create([
            'nama' => 'dr. Budi',
            'spesialis' => 'Dokter Gigi',
            'telepon' => '081234567891',
            'foto' => 'https://via.placeholder.com/150',
            'senin' => '-',
            'selasa' => '-',
            'rabu' => '10:00 - 12:00',
            'kamis' => '-',
            'jumat' => '-',
        ]);
        Dokter::create([
            'nama' => 'dr. Citra',
            'spesialis' => 'Psikologi',
            'telepon' => '081234567892',
            'foto' => 'https://via.placeholder.com/150',
            'senin' => '-',
            'selasa' => '-',
            'rabu' => '-',
            'kamis' => '09:00 - 11:00',
            'jumat' => '-',
        ]);
        Dokter::create([
            'nama' => 'dr. Dedi',
            'spesialis' => 'Dokter Gigi Spesialis',
            'telepon' => '081234567893',
            'foto' => 'https://via.placeholder.com/150',
            'senin' => '-',
            'selasa' => '-',
            'rabu' => '-',
            'kamis' => '-',
            'jumat' => '10:00 - 12:00',
        ]);
        Dokter::create([
            'nama' => 'dr. Eko',
            'spesialis' => 'Dokter Umum',
            'telepon' => '081234567894',
            'foto' => 'https://via.placeholder.com/150',
            'senin' => '-',
            'selasa' => '-',
            'rabu' => '-',
            'kamis' => '-',
            'jumat' => '-',
        ]);
        Dokter::create([
            'nama' => 'dr. Fani',
            'spesialis' => 'Dokter Umum',
            'telepon' => '081234567895',
            'foto' => 'https://via.placeholder.com/150',
            'senin' => '-',
            'selasa' => '-',
            'rabu' => '-',
            'kamis' => '-',
            'jumat' => '-',
        ]);

    }
}
