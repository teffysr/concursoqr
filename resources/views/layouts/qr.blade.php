<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name', '') }}</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('qr/css/styles.css') }}" rel="stylesheet" />
</head>
<body id="page-top" style="background: linear-gradient(rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.8) 0%), url({{asset('qr/assets/img/bg-masthead2.jpg')}});">
<!-- Mashead header-->
<header class="masthead" style="background: transparent!important; padding-top: 2rem!important;">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-12 mb-4">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-center mb-4">
                    @php($class = "display-3")
                    @if( $sponsor->phrase == '“Nunca pienso en las consecuencias de fallar un gran tiro… cuando se piensa en las consecuencias se está pensando en un resultado negativo” - Michael Jordan')
                        @php($class = "display-5")
                    @endif
                    <h1 class="{{ $class }} lh-1 mb-3 text-uppercase fw-bold" style="color: #6f42c1!important;">{{$sponsor->phrase}}</h1>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- Masthead device mockup feature-->
                <div class="masthead-device-mockup m-auto" style="500px!important;display: block!important;">
                    <div class="visible-print text-center bg-light m-auto py-3" style="width: 350px">
                        @yield('content')
                    </div>
                    <div class="mb-lg-0 text-center text-lg-center mb-0">
                        <span class="text-center opacity-0">{{ $link }}</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="mb-lg-0 text-center text-lg-center mb-0">
                    <p class="lead fw-normal text-muted mt-3 mb-4 display-6 text-uppercase" style="color: #6f42c1!important;">Escanea el código QR y participa para ganar diferentes premios patrocinados por:</p>
                    @php($px = "230px")
                    @if( $sponsor->image == '/sponsors/LaPuntita.png' and
                        $sponsor->phrase == '“Nunca pienso en las consecuencias de fallar un gran tiro… cuando se piensa en las consecuencias se está pensando en un resultado negativo” - Michael Jordan')
                        @php($px = "150px")
                    @endif
                    <img src="{{ asset($sponsor->image) }}" width={{ $px }}>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{ asset('qr/js/scripts.js') }}"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
