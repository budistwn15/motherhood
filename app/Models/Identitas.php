<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    protected $fillable = [
        'nama',
        'kode_identitas',
        'umur',
        'pekerjaan',
        'alamat'
    ];
}
