<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $fillable = [
        'npm',
        'nama',
        'prodi_id',
        'foto',
    ];

    public function Prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
}
