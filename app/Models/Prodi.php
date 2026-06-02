<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class Prodi extends Model
{
    protected $fillable = [
        'nama_prodi',
        'singkatan',
        'kaprodi',
        'fakultas_id',
    ];

    public function Fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }

    public function mahasiswa()
    {
        return $this->hasMany(mahasiswa::class);
    }
}
