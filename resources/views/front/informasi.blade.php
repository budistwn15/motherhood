@extends('layouts.front')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Artikel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Motherhood</a></li>
                        <li class="breadcrumb-item active">Artikel</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            @if(session()->has('message'))
                <div class="alert alert-success my-3">
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="row">
                @foreach($informasis as $informasi)
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{asset('storage/uploads/informasi/'.$informasi->gambar)}}" target="_blank">
                                    <img src="{{asset('storage/uploads/informasi/'.$informasi->gambar)}}" alt="" class="img-fluid">
                                </a>
                                <h4 class="mt-4 text-center">{{$informasi->nama}}</h4>
                                <p>{{$informasi->keterangan}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
