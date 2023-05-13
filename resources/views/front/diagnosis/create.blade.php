@extends('layouts.front-v1')
@section('content')
    {{--Hero--}}
    <section id="hero" style="background-color: #be3455;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 my-5 text-white">
                    <h2 class="fw-bold lh-sm">Diagnosis Penyakit</h2>
                    <p class="lead text-mute">Sebelum memulai diagnosis penyakit ibu hamil, mohon isi form identitas terlebih dahulu untuk membantu kami memberikan diagnosis yang lebih akurat dan spesifik. Kami akan menjaga kerahasiaan semua informasi yang Anda berikan dan hanya akan digunakan untuk kepentingan diagnosis.
                    </p>
                </div>
            </div>
        </div>
    </section>

{{--Identitas--}}
    <section id="identitas" class="my-3 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card border-0">
                        <div class="card-body">
                            <h3 class="card-title mb-4">Form Identitas</h3>
                            <form action="{{route('diagnosis.store')}}" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukkan Nama" value="{{old('nama')}}">
                                    <label for="nama">Nama</label>
                                    @error('nama')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="umur" id="umur" class="form-control @error('umur') is-invalid @enderror" placeholder="Masukkan umur" value="{{old('umur')}}">
                                    <label for="umur">Umur</label>
                                    @error('umur')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control @error('pekerjaan') is-invalid @enderror" placeholder="Masukkan pekerjaan" value="{{old('pekerjaan')}}">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    @error('pekerjaan')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Masukkan alamat" value="{{old('alamat')}}">
                                    <label for="alamat">Alamat</label>
                                    @error('alamat')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-diagnosis">Selanjutnya</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
