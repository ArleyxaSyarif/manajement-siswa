<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = [
        'nama_kelas',
        'level_kelas',
        'jurusan_id',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusans::class, 'jurusan_id');
    }

    public function siswas()
    {
        return $this->hasMany(Siswas::class, 'kelas_id');
    }
}
