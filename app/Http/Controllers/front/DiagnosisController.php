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
        $penyakits = Penyakit::with(['gejalas' => function($query) use ($request){
            $query->when($request['G01'] == 'ya' && $request['G02'] == 'ya' && $request['G03'] == 'ya' && $request['G04'] == 'ya' && $request['G05'] == 'ya' && $request['G06'] == 'ya' && $request['G07'] == 'ya' && $request['G08'] == 'ya', function ($q){
               $q->whereIn('gejala_id', [1,2,3,4,5,6,7,8])->first();
            });
            $query->when($request['G01'] == 'ya' && $request['G02'] == 'ya' && $request['G03'] == 'ya' && $request['G04'] == 'ya' && $request['G05'] == 'ya' && $request['G10'] == 'ya' && $request['G23'] == 'ya' && $request['G11'] == 'ya', function ($q){
                $q->whereIn('gejala_id', [1,2,3,4,5,10,23,11])->first();
            });
            $query->when($request['G10'] == 'ya' && $request['G12'] == 'ya' && $request['G13'] == 'ya' && $request['G14'] == 'ya' && $request['G15'] == 'ya' && $request['G16'] == 'ya' && $request['G17'] == 'ya', function ($q){
                $q->whereIn('gejala_id', [10,12,13,14,15,16,17])->first();
            });
            $query->when($request['G12'] == 'ya' && $request['G13'] == 'ya' && $request['G14'] == 'ya' && $request['G15'] == 'ya' && $request['G07'] == 'ya' && $request['G27'] == 'ya', function ($q){
                $q->whereIn('gejala_id', [12,13,14,15,27])->first();
            });
            $query->when($request['G18'] == 'ya' && $request['G19'] == 'ya' && $request['G20'] == 'ya' && $request['G21'] == 'ya', function ($q){
                $q->whereIn('gejala_id', [18,19,20,21])->first();
            });
            $query->when($request['G18'] == 'ya' && $request['G19'] == 'ya' && $request['G20'] == 'ya' && $request['G21'] == 'ya' && $request['G01'] == 'ya' && $request['G11'] == 'ya' && $request['G35'] == 'ya', function ($q){
                $q->whereIn('gejala_id', [18,19,20,21,1,11,35])->first();
            });
            $query->when($request['G22'] == 'ya' && $request['G23'] == 'ya' && $request['G24'] == 'ya' && $request['G25'] == 'ya' && $request['G26'] == 'ya' && $request['G27'] == 'ya', function ($q){
                $q->whereIn('gejala_id', [22,23,24,25,26,27])->first();
            });
            $query->when($request['G22'] == 'ya' && $request['G23'] == 'ya' && $request['G24'] == 'ya' && $request['G25'] == 'ya' && $request['G26'] == 'ya' && $request['G27'] == 'ya' && $request['G32'] == 'ya' && $request['G02'] == 'ya' && $request['G10'] == 'ya', function ($q){
                $q->whereIn('gejala_id', [22,23,24,25,26,27,32,2,10])->first();
            });
            $query->when($request['G28'] == 'ya' && $request['G29'] == 'ya' && $request['G30'] == 'ya' && $request['G31'] == 'ya' && $request['G32'] == 'ya' && $request['G33'] == 'ya', function ($q){
                $q->whereIn('gejala_id', [28,29,30,31,32,33])->first();
            });
            $query->when($request['G28'] == 'ya' && $request['G29'] == 'ya' && $request['G30'] == 'ya' && $request['G31'] == 'ya' && $request['G32'] == 'ya' && $request['G33'] == 'ya' && $request['G07'] == 'ya' && $request['G04'] == 'ya', function ($q){
                $q->whereIn('gejala_id', [28,29,30,31,32,33,7,4])->first();
            });
            $query->when($request['G09'] == 'ya' && $request['G11'] == 'ya' && $request['G34'] == 'ya' && $request['G35'] == 'ya' && $request['G36'] == 'ya' && $request['G37'] == 'ya', function ($q){
                $q->whereIn('gejala_id', [9,11,34,35,36,37])->first();
            });
            $query->when($request['G09'] == 'ya' && $request['G11'] == 'ya' && $request['G34'] == 'ya' && $request['G35'] == 'ya' && $request['G36'] == 'ya' && $request['G37'] == 'ya' && $request['G04'] == 'ya' && $request['G16'] == 'ya', function ($q){
                $q->whereIn('gejala_id', [9,11,34,35,36,37,4,16])->first();
            });
        }],'solusis')->get();

        return view('front.diagnosis.hasil',compact(
            'penyakits'
        ));
    }
}
