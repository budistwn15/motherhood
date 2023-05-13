@extends('layouts.front-v1')
@section('content')
    {{--Hero--}}
    <section id="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-4 mb-5 py-5" data-aos="fade-right">
                    <h2 class="display-4 fw-bold lh-sm">Sumber Informasi Terpercaya untuk Ibu Hamil</h2>
                    <p class="lead text-mute my-4">Temukan Diagnosis Penyakit Ibu Hamil, Informasi Seputar Kehamilan, dan Artikel Bermanfaat untuk Mendukung Kehamilan Anda</p>
                    <a href="{{route('diagnosis.create')}}" class="btn btn-diagnosis btn-lg">Periksa Sekarang</a>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="{{asset('dist/img/bg-hero.png')}}" alt="Motherhood" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    {{--apply--}}
    <section id="apply" class="my-5 py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12" data-aos="fade-up">
                    <h2 class="text-center fw-bold">Bagaimana Cara Diagnosis</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="bi bi-textarea-resize fw-bold" style="font-size: 3.5rem;color:#be3455;"></i>
                            <h6 class="card-title fw-bold">Registrasi Diri dengan Cermat</h6>
                            <p>Identitas lengkap ibu hamil menjadi hal penting yang harus diisi dengan cermat pada saat pendaftaran atau registrasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="bi bi-card-checklist fw-bold" style="font-size: 3.5rem;color:#be3455;"></i>
                            <h6 class="card-title fw-bold">Identifikasi Gejala yang Dialami</h6>
                            <p>Sebagai langkah awal, sistem akan menanyakan gejala-gejala yang dialami ibu hamil. Dalam beberapa kasus, gejala-gejala ini mungkin tampak jelas dan mudah diidentifikasi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="card border-0">
                        <div class="card-body">
                            <i class="bi bi-card-heading fw-bold" style="font-size: 3.5rem;color:#be3455;"></i>
                            <h6 class="card-title fw-bold">Hasil Diagnosis</h6>
                            <p>Setelah sistem berhasil mengidentifikasi gejala yang dialami oleh ibu hamil, selanjutnya akan dilakukan diagnosis yang lebih tepat dan solusi penanganan yang sesuai dengan kondisi ibu dan bayi dalam kandungan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Informasi--}}
    <section id="informasi" class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <h2 class="fw-bold">Informasi</h2>
                    <p>Kami menyediakan berbagai informasi dan saran untuk membantu ibu hamil menjaga kesehatan diri dan bayi dalam kandungan.</p>
                    <a href="{{route('front.informasi.index')}}" class="btn btn-diagnosis">Lihat Selengkapnya</a>
                </div>
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="row">
                        @foreach($informasis as $informasi)
                            <div class="col-lg-4">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <a href="{{asset('storage/uploads/informasi/'.$informasi->gambar)}}" target="_blank">
                                            <img src="{{asset('storage/uploads/informasi/'.$informasi->gambar)}}" alt="" class="img-fluid">
                                        </a>
                                        <h5 class="mt-4 fw-bold">{{$informasi->nama}}</h5>
                                        <p>{{$informasi->keterangan}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Artikel--}}
    <section id="artikel" class="my-5 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-left">
                    <h2 class="fw-bold">Artikel</h2>
                    <p>Kami menyediakan berbagai artikel dan informasi terbaru tentang kesehatan ibu hamil dan bayi dalam kandungan.</p>
                    <a href="{{route('front.artikel.index')}}" class="btn btn-diagnosis">Lihat Selengkapnya</a>
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    <div class="row">
                        @foreach($articles as $article)
                            <div class="col-lg-4">
                                <div class="card border-0">
                                    <div class="card-body">
                                        <i class="bi bi-journal-text fw-bold" style="font-size: 3rem;color:#be3455;"></i>
                                        <a href="{{$article->link}}" target="_blank" class="text-decoration-none text-dark fw-bold">
                                            <h5 class="fw-bold">{{$article->judul}}</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
