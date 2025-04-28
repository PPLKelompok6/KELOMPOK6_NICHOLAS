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
            'foto' => 'images/Andi.jpg',
            'senin' => '09:00 - 11:00',
            'selasa' => '10:00 - 12:00',
            'rabu' => '-',
            'kamis' => '-',
            'jumat' => '09:00 - 11:00',
            'deskripsi' => 'Dr Andi adalah dokter umum yang berpengalaman dalam menangani berbagai masalah kesehatan. Beliau memiliki spesialisasi dalam penyakit dalam dan telah berpraktik selama lebih dari 10 tahun.',
        ]);
        Dokter::create([
            'nama' => 'dr. Budi',
            'spesialis' => 'Dokter Gigi',
            'telepon' => '081234567891',
            'foto' => 'images/Budi.jpg',
            'senin' => '-',
            'selasa' => '-',
            'rabu' => '10:00 - 12:00',
            'kamis' => '-',
            'jumat' => '-',
            'deskripsi' => 'Dr Budi adalah dokter gigi yang ahli dalam perawatan gigi dan mulut. Beliau memiliki pengalaman lebih dari 8 tahun dalam bidang kedokteran gigi dan telah melakukan berbagai prosedur gigi.',
        ]);
        Dokter::create([
            'nama' => 'dr. Citra',
            'spesialis' => 'Psikologi',
            'telepon' => '081234567892',
            'foto' => 'images/Citra.jpg',
            'senin' => '-',
            'selasa' => '-',
            'rabu' => '-',
            'kamis' => '09:00 - 11:00',
            'jumat' => '-',
            'deskripsi' => 'Dr Citra adalah psikolog yang berpengalaman dalam menangani masalah kesehatan mental. Beliau memiliki spesialisasi dalam terapi kognitif perilaku dan telah membantu banyak pasien dalam mengatasi masalah emosional dan psikologis.',
        ]);
        Dokter::create([
            'nama' => 'dr. Dedi',
            'spesialis' => 'Dokter Gigi Spesialis',
            'telepon' => '081234567893',
            'foto' => 'images/Dedi.jpg',
            'senin' => '-',
            'selasa' => '-',
            'rabu' => '-',
            'kamis' => '-',
            'jumat' => '10:00 - 12:00',
            'deskripsi' => 'Dr Dedi adalah dokter gigi spesialis yang memiliki keahlian dalam bedah mulut dan perawatan ortodonti. Beliau telah berpraktik selama lebih dari 12 tahun dan memiliki banyak pengalaman dalam menangani kasus-kasus kompleks.',
        ]);
        Dokter::create([
            'nama' => 'dr. Eko',
            'spesialis' => 'Dokter Umum',
            'telepon' => '081234567894',
            'foto' => 'images/Eko.jpg',
            'senin' => '-',
            'selasa' => '13:00 - 15:00',
            'rabu' => '-',
            'kamis' => '13:00 - 15:00',
            'jumat' => '-',
            'deskripsi' => 'Dr Eko adalah dokter umum yang memiliki pengalaman dalam menangani berbagai masalah kesehatan. Beliau memiliki spesialisasi dalam penyakit dalam dan telah berpraktik selama lebih dari 5 tahun.',
        ]);
        Dokter::create([
            'nama' => 'dr. Fani',
            'spesialis' => 'Dokter Umum',
            'telepon' => '081234567895',
            'foto' => 'images/Fani.jpg',
            'senin' => '12:00 - 14:00',
            'selasa' => '12:00 - 14:00',
            'rabu' => '-',
            'kamis' => '-',
            'jumat' => '-',
            'deskripsi' => 'Dr Fani adalah dokter umum yang memiliki pengalaman dalam menangani berbagai masalah kesehatan. Beliau memiliki spesialisasi dalam penyakit dalam dan telah berpraktik selama lebih dari 5 tahun.',
        ]);
        Dokter::create([
            'nama' => 'dr. Aki',
            'spesialis' => 'Dokter Gigi',
            'telepon' => '081234567896',
            'foto' => 'images/Aki.jpg',
            'senin' => '09:00 - 11:00',
            'selasa' => '09:00 - 11:00',
            'rabu' => '-',
            'kamis' => '-',
            'jumat' => '-',
            'deskripsi' => 'Dr Aki adalah dokter gigi yang ahli dalam perawatan gigi dan mulut. Beliau memiliki pengalaman lebih dari 8 tahun dalam bidang kedokteran gigi dan telah melakukan berbagai prosedur gigi.',
        ]);

    }
}
