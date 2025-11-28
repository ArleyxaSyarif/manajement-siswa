<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusans extends Model
{
    protected $table = 'jurusans';
    protected $fillable = [
        'id_jurusan',
        'nama_jurusan',
    ];

public function kelas()
    {
        return $this->hasMany(Kelas::class, 'jurusan_id');
    }
}
