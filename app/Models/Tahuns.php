<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tahuns extends Model
{
     protected $table = 'tahuns';
    protected $fillable = [
        'id_tahun',
        'tahun',
    ];

    public function siswas()
    {
        return $this->hasMany(Siswas::class, 'tahun_id');
    }
}
