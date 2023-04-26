<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        $articles = Artikel::get();
        return view('front.artikel', compact(
            'articles'
        ));
    }
}
