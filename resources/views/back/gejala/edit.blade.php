@extends('layouts.back')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gejala</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Gejala</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                                <h3 class="card-title pt-2">Silahkan ubah form gejala di bawah ini</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('gejalas.update',['gejala' => $gejala->id])}}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="kode_gejala" class="form-label">Kode Gejala</label>
                                    <input type="text" name="kode_gejala" id="kode_gejala" class="form-control @error('kode_gejala') is-invalid @enderror" placeholder="Masukkan kode gejala" value="{{$gejala->kode_gejala}}">
                                    @error('kode_gejala')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama_gejala" class="form-label">Nama Gejala</label>
                                    <input type="text" name="nama_gejala" id="nama_gejala" class="form-control @error('nama_gejala') is-invalid @enderror" placeholder="Masukkan nama gejala" value="{{$gejala->nama_gejala}}">
                                    @error('nama_gejala')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn bg-pink">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
