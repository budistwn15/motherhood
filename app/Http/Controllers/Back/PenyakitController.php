<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\PenyakitRequest;
use App\Models\Penyakit;

class PenyakitController extends Controller
{
    public function index()
    {
        $penyakits = Penyakit::get();
        return view('back.penyakit.index', compact(
            'penyakits'
        ));
    }

    public function create()
    {
        return view('back.penyakit.create');
    }

    public function store(PenyakitRequest $request)
    {
        Penyakit::create([
            'kode_penyakit' => $request->kode_penyakit,
            'nama_penyakit' => $request->nama_penyakit
        ]);

        return redirect()->route('penyakits.index')
            ->with('message','Berhasil menambahkan penyakit');
    }

    public function edit(Penyakit $penyakit)
    {
        return view('back.penyakit.edit', compact(
            'penyakit'
        ));
    }

    public function update(Penyakit $penyakit, PenyakitRequest $request)
    {
        $penyakit->update([
            'kode_penyakit' => $request->kode_penyakit,
            'nama_penyakit' => $request->nama_penyakit
        ]);
        return redirect()->route('penyakits.index')
            ->with('message','Berhasil memperbaharui penyakit');
    }

    public function destroy(Penyakit $penyakit)
    {
        $penyakit->delete();
        return redirect()->route('penyakits.index')
            ->with('message','Berhasil menghapus penyakit');
    }
}
