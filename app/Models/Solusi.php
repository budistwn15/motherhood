<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Solusi extends Model
{
    protected $fillable = [
        'kode_solusi',
        'nama_solusi'
    ];

    public function penyakits() : BelongsToMany
    {
        return $this->belongsToMany('App\Models\Penyakit')->withTimestamps();
    }
}
