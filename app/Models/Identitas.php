<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Identitas extends Model
{
    protected $fillable = [
        'nama',
        'kode_identitas',
        'umur',
        'pekerjaan',
        'alamat'
    ];

    public function penyakit(): BelongsTo
    {
        return $this->belongsTo('App\Models\Penyakit');
    }
}
