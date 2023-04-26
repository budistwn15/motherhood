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
                               <h3 class="card-title pt-2">Berikut di bawah ini merupakan data solusi</h3>
                               <a href="{{route('solusis.create')}}" class="btn btn-primary">Tambah Solusi</a>
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
                                            <th>Kode Solusi</th>
                                            <th>Solusi</th>
                                            <th>Aksi</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        @foreach($solusis as $solusi)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$solusi->kode_solusi}}</td>
                                                <td>{!! $solusi->nama_solusi !!}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{route('solusis.edit',['solusi' => $solusi->id])}}" class="btn btn-dark mr-2">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form action="{{route('solusis.destroy',['solusi' => $solusi->id])}}" method="post">
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
