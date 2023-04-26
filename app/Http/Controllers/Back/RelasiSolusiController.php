<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use App\Models\Solusi;
use Illuminate\Http\Request;

class RelasiSolusiController extends Controller
{
    public function index()
    {
        $solusis = Solusi::with('penyakits')->get();
        $penyakits = Penyakit::get();
        return view('back.relasi.solusi.index', compact(
            'solusis',
            'penyakits'
        ));
    }

    public function create()
    {
        $solusis = Solusi::get();
        $penyakits = Penyakit::get();
        return view('back.relasi.solusi.create',compact(
            'solusis',
            'penyakits'
        ));
    }

    public function store(Request $request)
    {
        $solusi = Solusi::find($request->solusi_id);
        $penyakit = Penyakit::find($request->penyakit_id);

        $solusi->penyakits()->sync($penyakit);
        return redirect()->route('relasi-solusi.index')
            ->with('message','Berhasil merelasikan penyakit dengan solusi');
    }

    public function sync(Solusi $solusi)
    {
        $solusis = Solusi::get();
        $penyakits = Penyakit::get();
        return view('back.relasi.solusi.sync', compact(
            'solusi',
            'solusis',
            'penyakits'
        ));
    }

    public function update(Solusi $solusi, Request $request)
    {
        $solusi = Solusi::find($request->solusi_id);
        $penyakit = Penyakit::find($request->penyakit_id);

        $solusi->penyakits()->sync($penyakit);
        return redirect()->route('relasi-solusi.index')
            ->with('message','Berhasil merelasikan penyakit dengan solusi');
    }
}
