@extends('layouts.back')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gejala Penyakit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('relasi-gejala.index')}}">Gejala Penyakit</a></li>
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
                                <h3 class="card-title pt-2">Silahkan isi form gejala penyakit di bawah ini</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('relasi-gejala.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="gejala_id" class="form-label">Kode Gejala</label>
                                    <select class="form-control select2bs4 @error('gejala_id') is-invalid @enderror" style="width: 100%;" name="gejala_id">
                                        @foreach($gejalas as $gejala)
                                            <option value="{{$gejala->id}}" @selected(old('gejala_id') == $gejala->id)>{{$gejala->kode_gejala}} - {{$gejala->nama_gejala}}</option>
                                        @endforeach
                                    </select>
                                    @error('gejala_id')
                                    <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="penyakit_id" class="form-label">Kode Penyakit</label>
                                    <select class="form-control select2bs4 @error('penyakit_id') is-invalid @enderror" style="width: 100%;" name="penyakit_id">
                                        @foreach($penyakits as $penyakit)
                                            <option value="{{$penyakit->id}}" @selected(old('penyakit_id') == $penyakit->id)>{{$penyakit->kode_penyakit}} - {{$penyakit->nama_penyakit}}</option>
                                        @endforeach
                                    </select>
                                    @error('penyakit_id')
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
@push('scripts')
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
@endpush
