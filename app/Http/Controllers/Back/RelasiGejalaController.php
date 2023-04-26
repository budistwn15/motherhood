<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class RelasiGejalaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::with('penyakits')->get();
        $penyakits = Penyakit::get();
        return view('back.relasi.gejala.index', compact(
            'gejalas',
            'penyakits'
        ));
    }

    public function create()
    {
        $gejalas = Gejala::get();
        $penyakits = Penyakit::get();
        return view('back.relasi.gejala.create',compact(
            'gejalas',
            'penyakits'
        ));
    }

    public function store(Request $request)
    {
        $gejala = Gejala::find($request->gejala_id);
        $penyakit = Penyakit::find($request->penyakit_id);

        $gejala->penyakits()->sync($penyakit);
        return redirect()->route('relasi-gejala.index')
            ->with('message','Berhasil merelasikan penyakit dengan gejala');
    }

    public function sync(Gejala $gejala)
    {
        $gejalas = Gejala::get();
        $penyakits = Penyakit::get();
        return view('back.relasi.gejala.sync', compact(
            'gejala',
            'gejalas',
            'penyakits'
        ));
    }

    public function update(Gejala $gejala, Request $request)
    {
        $gejala = Gejala::find($request->gejala_id);
        $penyakit = Penyakit::find($request->penyakit_id);

        $gejala->penyakits()->sync($penyakit);
        return redirect()->route('relasi-gejala.index')
            ->with('message','Berhasil merelasikan penyakit dengan gejala');
    }
}
