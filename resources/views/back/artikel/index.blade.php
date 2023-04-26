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
                               <h3 class="card-title pt-2">Berikut di bawah ini merupakan data artikel</h3>
                               <a href="{{route('artikels.create')}}" class="btn btn-primary">Tambah Artikel</a>
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
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Link</th>
                                            <th>Aksi</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @foreach($artikels as $artikel)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$artikel->judul}}</td>
                                                <td>{{$artikel->isi}}</td>
                                                <td>
                                                    <a href="{{$artikel->link}}" target="_blank">{{$artikel->link}}</a>
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{route('artikels.edit',['artikel' => $artikel->id])}}" class="btn btn-dark mr-2">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="{{route('artikels.destroy',['artikel' => $artikel->id])}}" method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn bg-pink">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
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
