<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    public function run()
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
            'rabu' => '10:00 - 12:00',
        ]);

        Dokter::create([
            'nama' => 'dr. Citra',
            'spesialis' => 'Psikolog',
            'telepon' => '081234567892',
            'foto' => 'https://via.placeholder.com/150',
            'senin' => '09:00 - 11:00',
            'jumat' => '10:00 - 12:00',
        ]);
    }
}
