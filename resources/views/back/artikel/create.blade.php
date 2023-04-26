@extends('layouts.back')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Artikel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('artikels.index')}}">Artikel</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
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
                                <h3 class="card-title pt-2">Silahkan isi form artikel di bawah ini</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('artikels.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="judul" class="form-label">Judul</label>
                                    <input type="text" name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror" placeholder="Masukkan judul" value="{{old('judul')}}">
                                    @error('judul')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="isi" class="form-label">Isi</label>
                                    <textarea name="isi" id="isi" cols="30" rows="10"
                                              class="form-control @error('isi') is-invalid @enderror">{{old('isi')}}</textarea>
                                    @error('isi')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="link" class="form-label">Link</label>
                                    <input type="url" name="link" id="link" class="form-control @error('link') is-invalid @enderror" placeholder="Masukkan link" value="{{old('link')}}">
                                    @error('link')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn bg-pink">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
