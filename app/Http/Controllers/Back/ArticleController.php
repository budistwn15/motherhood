<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArtikelRequest;
use App\Models\Artikel;

class ArticleController extends Controller
{
    public function index()
    {
        $artikels = Artikel::get();
        return view('back.artikel.index', compact(
            'artikels'
        ));
    }

    public function create()
    {
        return view('back.artikel.create');
    }

    public function store(ArtikelRequest $request)
    {
        Artikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'link' => $request->link,
        ]);

        return redirect()->route('artikels.index')
            ->with('message','Berhasil menambahkan artikel');
    }

    public function edit(Artikel $artikel)
    {
        return view('back.artikel.edit', compact(
            'artikel'
        ));
    }

    public function update(Artikel $artikel, ArtikelRequest $request)
    {
        $artikel->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'link' => $request->link,
        ]);
        return redirect()->route('artikels.index')
            ->with('message','Berhasil memperbaharui artikel');
    }

    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect()->route('artikels.index')
            ->with('message','Berhasil menghapus artikel');
    }
}
