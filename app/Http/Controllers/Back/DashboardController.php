<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Solusi;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $gejala = Gejala::get();
        $penyakit = Penyakit::get();
        $solusi = Solusi::get();
        $artikel = Artikel::get();
        return view('back.dashboard',[
            'gejala' => $gejala->count(),
            'penyakit' => $penyakit->count(),
            'solusi' => $solusi->count(),
            'artikel' => $artikel->count()
        ]);
    }
}
