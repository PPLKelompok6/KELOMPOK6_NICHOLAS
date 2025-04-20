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
        'sabtu',
        'minggu',
    ];

    public function getJadwalAttribute()
    {
        return [
            'senin' => $this->senin,
            'selasa' => $this->selasa,
            'rabu' => $this->rabu,
            'kamis' => $this->kamis,
            'jumat' => $this->jumat,
            'sabtu' => $this->sabtu,
            'minggu' => $this->minggu,
        ];
    }
}
