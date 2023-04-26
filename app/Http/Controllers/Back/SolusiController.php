<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\SolusiRequest;
use App\Models\Solusi;

class SolusiController extends Controller
{
    public function index()
    {
        $solusis = Solusi::get();
        return view('back.solusi.index', compact(
            'solusis'
        ));
    }

    public function create()
    {
        return view('back.solusi.create');
    }

    public function store(SolusiRequest $request)
    {
        Solusi::create([
            'kode_solusi' => $request->kode_solusi,
            'nama_solusi' => $request->nama_solusi
        ]);

        return redirect()->route('solusis.index')
            ->with('message','Berhasil menambahkan solusi');
    }

    public function edit(Solusi $solusi)
    {
        return view('back.solusi.edit', compact(
            'solusi'
        ));
    }

    public function update(Solusi $solusi, SolusiRequest $request)
    {
        $solusi->update([
            'kode_solusi' => $request->kode_solusi,
            'nama_solusi' => $request->nama_solusi
        ]);
        return redirect()->route('solusis.index')
            ->with('message','Berhasil memperbaharui solusi');
    }

    public function destroy(Solusi $solusi)
    {
        $solusi->delete();
        return redirect()->route('solusis.index')
            ->with('message','Berhasil menghapus solusi');
    }
}
