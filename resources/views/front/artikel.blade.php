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
                @foreach($articles as $article)
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4>{{$article->judul}}</h4>
                                <p>{{$article->isi}}</p>
                                <a href="{{$article->link}}" target="_blank" class="btn bg-pink">Lihat</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
