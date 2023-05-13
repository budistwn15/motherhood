@extends('layouts.front-v1')
@section('content')
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
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0 mb-4">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Hasil Diagnosis</h3>
                        </div>
                    </div>
                    <div class="card border-0 mb-4">
                        <div class="card-header btn-diagnosis">
                            Identitas
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <td>{{$identitas->nama}}</td>
                                </tr>
                                <tr>
                                    <th>Umur</th>
                                    <td>{{$identitas->umur}}</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan</th>
                                    <td>{{$identitas->pekerjaan}}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{$identitas->alamat}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card border-0 mb-4">
                        <div class="card-header btn-diagnosis">
                            Penyakit
                        </div>
                        <div class="card-body">
                            {{$penyakit->nama_penyakit}}
                        </div>
                    </div>
                    <div class="card border-0 mb-4">
                        <div class="card-header btn-diagnosis">
                            Solusi
                        </div>
                        <div class="card-body">
                            @foreach($penyakit->solusis as $solusi)
                                {!! $solusi->nama_solusi !!}
                            @endforeach
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{route('diagnosis.create')}}" class="btn btn-diagnosis text-end">Simpan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
