<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\InformasiRequest;
use App\Models\Informasi;

class InformasiController extends Controller
{
    public function index()
    {
        $informasis = Informasi::get();
        return view('back.informasi.index', compact(
            'informasis'
        ));
    }

    public function create()
    {
        return view('back.informasi.create');
    }

    public function store(InformasiRequest $request)
    {
        if($request->hasFile('gambar')){
            $slug = $request['nama'];
            $extFile = $request->gambar->getClientOriginalExtension();
            $nameFile = $slug.'-'.time().".".$extFile;
            $request->gambar->storeAs('public/uploads/informasi/',$nameFile);
        }

        Informasi::create([
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'gambar' => $nameFile,
        ]);

        return redirect()->route('informasis.index')
            ->with('message','Berhasil menambahkan informasi');
    }

    public function edit(Informasi $informasi)
    {
        return view('back.informasi.edit', compact(
            'informasi'
        ));
    }

    public function update(Informasi $informasi, InformasiRequest $request)
    {
        $slug = $request['name'];
        if($request->hasFile('gambar')){
            $extFile = $request->gambar->getClientOriginalExtension();
            $nameFile = $slug.'-'.time().".".$extFile;
            $request->gambar->storeAs('public/uploads/informasi/',$nameFile);
            $informasi->update([
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
                'gambar' => $nameFile,
            ]);
        } else{
            $informasi->update([
                'nama' => $request->nama,
                'keterangan' => $request->keterangan,
            ]);
        }
        return redirect()->route('informasis.index')
            ->with('message','Berhasil memperbaharui informasi');
    }

    public function destroy(Informasi $informasi)
    {
        $informasi->delete();
        return redirect()->route('informasis.index')
            ->with('message','Berhasil menghapus informasi');
    }
}
