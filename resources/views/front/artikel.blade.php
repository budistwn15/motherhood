@extends('layouts.front-v1')
@section('content')
    <section id="hero" style="background-color: #be3455;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 my-5 text-white">
                    <h2 class="fw-bold lh-sm">Artikel</h2>
                    <p class="lead text-mute">Kami menyediakan berbagai artikel dan informasi terbaru tentang kesehatan ibu hamil dan bayi dalam kandungan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="content my-5 py-5">
        <div class="container">
            <div class="row">
                @foreach($articles as $article)
                    <div class="col-lg-4">
                        <div class="card p-3">
                            <div class="card-body">
                                <h4 class="fw-bold card-title">{{$article->judul}}</h4>
                                <p class="my-3 lead">{{$article->isi}}</p>
                                <a href="{{$article->link}}" target="_blank" class="btn btn-diagnosis">Lihat</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
