@extends('layouts.front-v1')
@section('content')
    <section id="hero" style="background-color: #be3455;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 my-5 text-white">
                    <h2 class="fw-bold lh-sm">Informasi</h2>
                    <p class="lead text-mute">Kami menyediakan berbagai informasi dan saran untuk membantu ibu hamil menjaga kesehatan diri dan bayi dalam kandungan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="content my-5 py-5">
        <div class="container">
            @if(session()->has('message'))
                <div class="alert alert-success my-3">
                    {{session()->get('message')}}
                </div>
            @endif
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
    </section>
@endsection
