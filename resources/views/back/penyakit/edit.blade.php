@extends('layouts.back')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Penyakit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('penyakits.index')}}">Penyakit</a></li>
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
                                <h3 class="card-title pt-2">Silahkan ubah form penyakit di bawah ini</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('penyakits.update',['penyakit' => $penyakit->id])}}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="kode_penyakit" class="form-label">Kode Penyakit</label>
                                    <input type="text" name="kode_penyakit" id="kode_penyakit" class="form-control @error('kode_penyakit') is-invalid @enderror" placeholder="Masukkan kode penyakit" value="{{$penyakit->kode_penyakit}}">
                                    @error('kode_penyakit')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama_penyakit" class="form-label">Nama Penyakit</label>
                                    <input type="text" name="nama_penyakit" id="nama_penyakit" class="form-control @error('nama_penyakit') is-invalid @enderror" placeholder="Masukkan nama penyakit" value="{{$penyakit->nama_penyakit}}">
                                    @error('nama_penyakit')
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
