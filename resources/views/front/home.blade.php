@extends('layouts.front')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Home</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Motherhood</a></li>
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            @if(session()->has('message'))
                <div class="alert alert-success my-3">
                    {{session()->get('message')}}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success">
                        Selamat datang di Motherhood, tempat di mana Anda dapat menemukan berbagai informasi tentang kehamilan dan diagnosis penyakit. Kami senang Anda memilih kami sebagai sumber informasi Anda dan berharap Anda menikmati menjelajahi situs kami. Terima kasih telah mengunjungi Motherhood!
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
