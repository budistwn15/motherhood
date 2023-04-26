@extends('layouts.front')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Diagnosis</h1>
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
                                <h3 class="card-title pt-2">Silahkan isi gejala yang anda alami</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(session()->has('message'))
                                <div class="alert alert-success my-3">
                                    {{session()->get('message')}}
                                </div>
                            @endif
                            <form action="{{route('diagnosis.update',['kode_identitas' => $identitas->kode_identitas])}}" method="post">
                                @csrf
                                <table class="table">
                                    @foreach($gejalas as $gejala)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$gejala->nama_gejala}}</td>
                                            <td>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="{{$gejala->kode_gejala}}" id="{{$gejala->kode_gejala}}-ya" value="ya">
                                                    <label class="form-check-label" for="{{$gejala->kode_gejala}}-ya">Ya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="{{$gejala->kode_gejala}}" id="{{$gejala->kode_gejala}}-tidak" value="tidak">
                                                    <label class="form-check-label" for="{{$gejala->kode_gejala}}-tidak">Tidak</label>
                                                </div>
                                                @error($gejala->kode_gejala)
                                                <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                <button type="submit" class="btn bg-pink">Selanjutnya</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
