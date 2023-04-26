<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\GejalaRequest;
use App\Models\Gejala;

class GejalaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::get();
        return view('back.gejala.index', compact(
            'gejalas'
        ));
    }

    public function create()
    {
        return view('back.gejala.create');
    }

    public function store(GejalaRequest $request)
    {
        Gejala::create([
            'kode_gejala' => $request->kode_gejala,
            'nama_gejala' => $request->nama_gejala
        ]);

        return redirect()->route('gejalas.index')
            ->with('message','Berhasil menambahkan gejala');
    }

    public function edit(Gejala $gejala)
    {
        return view('back.gejala.edit', compact(
            'gejala'
        ));
    }

    public function update(Gejala $gejala, GejalaRequest $request)
    {
        $gejala->update([
            'kode_gejala' => $request->kode_gejala,
            'nama_gejala' => $request->nama_gejala
        ]);
        return redirect()->route('gejalas.index')
            ->with('message','Berhasil memperbaharui gejala');
    }

    public function destroy(Gejala $gejala)
    {
        $gejala->delete();
        return redirect()->route('gejalas.index')
            ->with('message','Berhasil menghapus gejala');
    }
}
