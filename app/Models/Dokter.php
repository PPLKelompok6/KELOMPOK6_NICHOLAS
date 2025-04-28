<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokters';

    protected $fillable = [
        'nama',
        'spesialis',
        'telepon',
        'foto',
        'senin',
        'selasa',
        'rabu',
        'kamis',
        'jumat',
        'deskripsi',
    ];

    public function getJadwalAttribute()
    {
        return [
            'Senin' => $this->senin,
            'Selasa' => $this->selasa,
            'Rabu' => $this->rabu,
            'Kamis' => $this->kamis,
            'Jumat' => $this->jumat,
        ];
    }
}
