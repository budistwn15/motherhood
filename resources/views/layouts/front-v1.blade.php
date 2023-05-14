<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motherhood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary p-4">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('dist/img/logo-nobg-up.png')}}" alt="Motherhood" width="50" height="50">
            Motherhood
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item me-4">
                    <a class="nav-link {{(request()->is('/')) ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link {{(request()->is('diagnosis/*')) ? 'active' : ''}}" href="{{route('diagnosis.create')}}">Diagnosis Penyakit</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link {{(request()->is('informasi')) ? 'active' : ''}}" href="{{route('front.informasi.index')}}">Informasi</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link {{(request()->is('artikel')) ? 'active' : ''}}" href="{{route('front.artikel.index')}}">Artikel</a>
                </li>
                <li class="nav-item me-4">
                    <a class="btn btn-diagnosis" href="{{route('login')}}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

{{--footer--}}
<section id="footer" class="mt-5 border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="text-center py-2">Copyright 2023 Agnia Virli R.  All rights reserved.</p>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
