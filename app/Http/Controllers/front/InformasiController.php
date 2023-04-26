<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Informasi;

class InformasiController extends Controller
{
    public function index()
    {
        $informasis = Informasi::get();
        return view('front.informasi', compact(
            'informasis'
        ));
    }
}
