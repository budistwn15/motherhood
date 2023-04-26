@extends('layouts.front')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Hasil Diagnosis</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('diagnosis.create')}}">Diagnosis</a></li>
                        <li class="breadcrumb-item active">Form Identitas</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title pt-2">Berikut di bawah ini merupakan hasil diagnosis berdasarkan gejala yang anda alami</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(session()->has('message'))
                                <div class="alert alert-success my-3">
                                    {{session()->get('message')}}
                                </div>
                            @endif
                                <h5 class="my-4">Penyakit</h5>
                                @foreach($penyakits as $penyakit)
                                    @foreach($penyakit->gejalas as $gejala)
                                        <div class="alert alert-primary my-4">
                                            {{$penyakit->nama_penyakit}}
                                        </div>
                                        <h5 class="my-4">Solusi</h5>
                                        @foreach($penyakit->solusis as $solusi)
                                            @if($penyakit->id == 1 & $solusi->pivot->penyakit_id == 1)
                                                <div class="alert alert-primary my-4">
                                                    {!! $solusi->nama_solusi !!}
                                                </div>
                                            @elseif($penyakit->id == 2 & $solusi->pivot->penyakit_id == 2)
                                                <div class="alert alert-primary my-4">
                                                    {!! $solusi->nama_solusi !!}
                                                </div>
                                            @elseif($penyakit->id == 3 & $solusi->pivot->penyakit_id == 3)
                                                <div class="alert alert-primary my-4">
                                                    {!! $solusi->nama_solusi !!}
                                                </div>
                                            @elseif($penyakit->id == 4 & $solusi->pivot->penyakit_id == 4)
                                                <div class="alert alert-primary my-4">
                                                    {!! $solusi->nama_solusi !!}
                                                </div>
                                            @elseif($penyakit->id == 5 & $solusi->pivot->penyakit_id == 5)
                                                <div class="alert alert-primary my-4">
                                                    {!! $solusi->nama_solusi !!}
                                                </div>
                                            @elseif($penyakit->id == 6 & $solusi->pivot->penyakit_id == 6)
                                                <div class="alert alert-primary my-4">
                                                    {!! $solusi->nama_solusi !!}
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
