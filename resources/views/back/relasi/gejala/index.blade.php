@extends('layouts.back')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Relasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('relasi-gejala.index')}}">Relasi</a></li>
                        <li class="breadcrumb-item active">Lihat</li>
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
                                <h3 class="card-title pt-2">Berikut di bawah ini merupakan data gejala penyakit</h3>
                                <a href="{{route('relasi-gejala.create')}}" class="btn btn-primary">Tambah Gejala Penyakit</a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if(session()->has('message'))
                                <div class="alert alert-success my-3">
                                    {{session()->get('message')}}
                                </div>
                            @endif
                                <div class="alert alert-secondary my-3">
                                    Keterangan Penyakit
                                    <ol>
                                        @foreach($penyakits as $penyakit)
                                            <li>{{$penyakit->kode_penyakit}} - {{$penyakit->nama_penyakit}}</li>
                                        @endforeach
                                    </ol>
                                </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="tabledata">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Gejala Penyakit</th>
                                        <th>Jenis Penyakit</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($gejalas as $gejala)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>
                                                {{$gejala->kode_gejala}}
                                                <br>
                                                {{$gejala->nama_gejala}}
                                            </td>
                                            <td>
                                                @foreach($gejala->penyakits as $penyakit)
                                                    <span class="btn btn-primary btn-sm my-2">{{$penyakit->nama_penyakit}}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{route('relasi-gejala.sync',['gejala' => $gejala->id])}}" class="btn btn-dark mr-2">
                                                        <i class="fas fa-sync"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            $('#tabledata').DataTable();
        });
    </script>
@endpush
