<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Requests\HasilRequest;
use App\Http\Requests\IdentitasRequest;
use App\Models\Gejala;
use App\Models\Identitas;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiagnosisController extends Controller
{
    public function create()
    {
        return view('front.diagnosis.create');
    }

    public function store(IdentitasRequest $request)
    {
        $kode_identitas = Str::random(5);
        Identitas::create([
            'nama' => $request->nama,
            'kode_identitas' => $kode_identitas,
            'umur' => $request->umur,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat
        ]);
        return redirect()->route('diagnosis.gejala',['kode_identitas' => $kode_identitas])
            ->with('message','Berhasil mengisi identitas, Silahkan untuk mengisi gejala yang anda alami');
    }

    public function gejala($kode_identitas)
    {
        $identitas = Identitas::where('kode_identitas', $kode_identitas)->firstOrFail();
        $gejalas = Gejala::get();
        return view('front.diagnosis.gejala-penyakit', compact(
            'gejalas',
            'identitas'
        ));
    }

    public function update($kode_identitas, HasilRequest $request)
    {
        $identitas = Identitas::where('kode_identitas', $kode_identitas)->firstOrFail();
        if($request['G01'] && $request['G02'] && $request['G03'] && $request['G04'] && $request['G05'] && $request['G06'] && $request['G07'] && $request['G08'] || $request['G01'] && $request['G02'] && $request['G03'] && $request['G04'] && $request['G05'] && $request['G10'] && $request['G23'] && $request['G11'] ){
            $penyakit = Penyakit::find(1);
        }else if($request['G10'] && $request['G12'] && $request['G13'] && $request['G14'] && $request['G15'] && $request['G16'] && $request['G17'] || $request['G12'] && $request['G13'] && $request['G14'] && $request['G15'] && $request['G07'] && $request['G27']){
            $penyakit = Penyakit::find(2);
        }else if($request['G18'] && $request['G19'] && $request['G20'] && $request['G21'] || $request['G18'] && $request['G19'] && $request['G20'] && $request['G21'] && $request['G01'] && $request['G11'] && $request['G35']){
            $penyakit = Penyakit::find(3);
        }else if($request['G22'] && $request['G23'] && $request['G24'] && $request['G25'] && $request['G26'] && $request['G27'] || $request['G18'] && $request['G22'] && $request['G23'] && $request['G24'] && $request['G25'] && $request['G26'] && $request['G27'] && $request['G32'] && $request['G02'] && $request['G10']){
            $penyakit = Penyakit::find(4);
        }else if($request['G28'] && $request['G29'] && $request['G30'] && $request['G31'] && $request['G32'] && $request['G33'] || $request['G28'] && $request['G29'] && $request['G30'] && $request['G31'] && $request['G32'] && $request['G33'] && $request['G07'] && $request['G04']){
            $penyakit = Penyakit::find(5);
        }else if($request['G09'] && $request['G11'] && $request['G34'] && $request['G35'] && $request['G36'] && $request['G37'] || $request['G09'] && $request['G11'] && $request['G34'] && $request['G35'] && $request['G36'] && $request['G37'] && $request['G04'] && $request['G16']){
            $penyakit = Penyakit::find(6);
        }else{
            $penyakit = null;
        }

        Identitas::where('kode_identitas', $identitas->kode_identitas)->update([
            'penyakit_id' => $penyakit->id
        ]);

        return view('front.diagnosis.hasil',compact(
            'identitas',
            'penyakit'
        ));
    }
}
