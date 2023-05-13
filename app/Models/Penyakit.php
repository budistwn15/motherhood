<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Penyakit extends Model
{
    protected $fillable = [
        'kode_penyakit',
        'nama_penyakit',
        'penyakit_id'
    ];

    public function gejalas() : BelongsToMany
    {
        return $this->belongsToMany('App\Models\Gejala')->withTimestamps();
    }

    public function solusis() : BelongsToMany
    {
        return $this->belongsToMany('App\Models\Solusi')->withTimestamps();
    }
}
