@extends('layouts.back')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Identitas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('identitas.index')}}">Identitas</a></li>
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
                               <h3 class="card-title pt-2">Berikut di bawah ini merupakan data pengguna yang melakukan diagnosis penyakit</h3>
                           </div>
                       </div>
                       <div class="card-body">
                           @if(session()->has('message'))
                               <div class="alert alert-success my-3">
                                   {{session()->get('message')}}
                               </div>
                           @endif
                           <div class="table-responsive">
                               <table class="table table-striped" id="tabledata">
                                   <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Umur</th>
                                            <th>Pekerjaan</th>
                                            <th>Alamat</th>
                                            <th>Penyakit</th>
                                            <th>Dibuat Pada</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @foreach($identitas as $value)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$value->nama}}</td>
                                                <td>{{$value->umur}}</td>
                                                <td>{{$value->pekerjaan}}</td>
                                                <td>{{$value->alamat}}</td>
                                                <td>{{$value->penyakit->nama_penyakit}}</td>
                                                <td>{{$value->created_at->diffForHumans()}}</td>
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
