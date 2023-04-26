@extends('layouts.back')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Dahsboard</li>
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
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{$gejala}}</h3>
                            <p>Gejala</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-tape"></i>
                        </div>
                        <a href="{{route('gejalas.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{$penyakit}}</h3>
                            <p>Penyakit</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-virus"></i>
                        </div>
                        <a href="{{route('penyakits.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{$solusi}}</h3>
                            <p>Solusi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-syringe"></i>
                        </div>
                        <a href="{{route('solusis.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{$artikel}}</h3>
                            <p>Artikel</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-blog"></i>
                        </div>
                        <a href="{{route('artikels.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
    </section>
@endsection
