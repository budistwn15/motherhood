@extends('layouts.back')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Solusi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('solusis.index')}}">Solusi</a></li>
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
                                <h3 class="card-title pt-2">Silahkan ubah form solusi di bawah ini</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('solusis.update',['solusi' => $solusi->id])}}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <label for="kode_solusi" class="form-label">Kode Solusi</label>
                                    <input type="text" name="kode_solusi" id="kode_solusi" class="form-control @error('kode_solusi') is-invalid @enderror" placeholder="Masukkan kode solusi" value="{{$solusi->kode_solusi}}">
                                    @error('kode_solusi')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama_solusi" class="form-label">Nama Solusi</label>
                                    <textarea name="nama_solusi" id="nama_solusi" cols="30" rows="10"
                                              class="form-control @error('nama_solusi') is-invalid @enderror">{{$solusi->nama_solusi}}</textarea>
                                    @error('nama_solusi')
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
