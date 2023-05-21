<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/heroes.css" rel="stylesheet">
</head>

<body style="background-color: #fefefe;">

    <main>

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="img/undraw_proud_coder_re_exuy.svg" class="d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    @auth
                    <h1 class="display-5 fw-bold lh-1 mb-3">Welcome Back, {{ auth()->user()->name }}</h1>
                    <p class="lead">Sistem pendukung keputusan pemilihan monitor adalah sistem yang membantu pengguna
                        memilih monitor yang sesuai dengan kebutuhan dan preferensi. Dengan menggunakan kriteria dan
                        analisis data, sistem memberikan rekomendasi monitor berdasarkan harga, ukuran layar, resolusi
                        layar, teknologi panel, refresh rate, response time dan color gamut. Ini membantu pengguna
                        menghemat waktu dan mendapatkan rekomendasi yang objektif.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{ route('dashboard') }}" class="btn btn-dark btn-lg px-4 me-md-2">Dashboard</a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button href="{{ route('logout') }}" class="btn btn-secondary btn-lg px-4 me-md-2">Log
                                out</button>
                        </form>
                    </div>
                    @else
                    <h1 class="display-5 fw-bold lh-1 mb-3">SPK Pemilihan Monitor</h1>
                    <p class="lead">Sistem pendukung keputusan pemilihan monitor adalah sistem yang membantu pengguna
                        memilih monitor yang sesuai dengan kebutuhan dan preferensi. Dengan menggunakan kriteria dan
                        analisis data, sistem memberikan rekomendasi monitor berdasarkan harga, ukuran layar, resolusi
                        layar, teknologi panel, refresh rate, response time dan color gamut. Ini membantu pengguna
                        menghemat waktu dan mendapatkan rekomendasi yang objektif.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{ route('register') }}" class="btn btn-dark btn-lg px-4 me-md-2">Register</a>
                        <a href="{{ route('login') }}" class="btn btn-secondary btn-lg px-4 me-md-2">Log in</a>
                    </div>
                    @endauth
                </div>
            </div>
        </div>

    </main>

</body>

</html>