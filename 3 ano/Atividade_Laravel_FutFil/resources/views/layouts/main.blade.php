<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/main.js"></script>
    </head>
    <body>
        <!-- fontes google-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Farro:wght@300;400;500;700&display=swap" rel="stylesheet">


        <!-- navbar-->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid img">
                <img src="/img/logo.png" alt="" width="65" height="80"><a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/index">Início</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/quemSomos">Quem somos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/contato">Contato</a>
                    </li>
                </div>
            </div>
        </nav>
        <!-- navbar-->


        @yield('content')
        <footer>
            <div class="container text-center">
            <div class="row">
                <div class="col" style="margin:50px;">
                    <img src="/img/logo.png" width="85" height="80" alt="">
                </div>

                <div class="col" style="margin: 50px; color: white  ;">
                © 2024 FutFil. Todos os direitos reservados.
                </div>
                <div class="col" style="margin: 50px;">
                <a href="#"><img src="/img/youtube-logo.png" alt=""></a>
                <a href="#"><img src="/img/insta-logo.png" alt=""></a>
                </div>
            </div>
        </footer>
    </body>
</html>