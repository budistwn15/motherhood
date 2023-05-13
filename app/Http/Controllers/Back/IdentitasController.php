<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Identitas;

class IdentitasController extends Controller
{
    public function index()
    {
        $identitas = Identitas::orderByDesc('created_at')->get();
        return view('back.identitas.index', compact(
            'identitas'
        ));
    }
}
