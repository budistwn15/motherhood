@extends('layouts.front-v1')
@section('content')
    {{--Hero--}}
    <section id="hero" style="background-color: #be3455;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 my-5 text-white">
                    <h2 class="fw-bold lh-sm">Diagnosis Penyakit</h2>
                    <p class="lead text-mute">Sebelum memulai diagnosis penyakit ibu hamil, mohon isi form identitas terlebih dahulu untuk membantu kami memberikan diagnosis yang lebih akurat dan spesifik. Kami akan menjaga kerahasiaan semua informasi yang Anda berikan dan hanya akan digunakan untuk kepentingan diagnosis.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="identitas" class="my-3 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    @if(session()->has('message'))
                        <div class="alert alert-success my-3">
                            {{session()->get('message')}}
                        </div>
                    @endif
                    <div class="card border-0">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Identifikasi Gejala</h3>
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
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-diagnosis text-end">Selanjutnya</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
