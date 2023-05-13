<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Informasi;

class HomeController extends Controller
{
    public function __invoke()
    {
        $informasis = Informasi::limit(3)->get();
        $articles = Artikel::limit(3)->get();
        return view('front.home', compact(
            'informasis',
            'articles'
        ));
    }
}
