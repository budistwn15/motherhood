<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Gejala extends Model
{
    protected $fillable = [
        'kode_gejala',
        'nama_gejala'
    ];

    public function penyakits() : BelongsToMany
    {
        return $this->belongsToMany('App\Models\Penyakit')->withTimestamps();
    }
}
