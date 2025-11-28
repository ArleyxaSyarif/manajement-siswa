<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswas extends Model
{
    protected $table = 'siswas';
    protected $fillable = [
        'nama_siswa',
        'nisn_siswa',
        'alamat_siswa',
        'jenis_kelamin',
        'foto_siswa',
        'agama',
        'tanggal_lahir',
        'kelas_id',
        'tahun_id',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function tahun()
    {
        return $this->belongsTo(Tahuns::class, 'tahun_id');
    }
}