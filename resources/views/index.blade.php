<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', '') }}</title>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('qr/css/styles.css') }}" rel="stylesheet" />

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body id="page-top" style="background: linear-gradient(rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.8) 0%), url({{asset('qr/assets/img/bg-masthead2.jpg')}});">
        <header class="masthead" style="background: transparent!important; padding-top: 10rem!important;">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="display-1 mx-auto my-0 text-uppercase">Concurso Qr</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5" style="color: #6f42c1!important;">"La fortuna está al lado de quien se atreve" (Virgilio)</h2>

                        @if (Route::has('login'))
                            <div class="text-center">
                                @auth
                                    <a class="btn btn-primary" href="/home">Ir al Panel Administrador</a>
                                @else
                                    <a class="btn btn-primary" href="/login">Ingresar</a>

                                    {{--                        @if (Route::has('register'))--}}
                                    {{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>--}}
                                    {{--                        @endif--}}
                                @endauth
                            </div>
                        @endif
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
