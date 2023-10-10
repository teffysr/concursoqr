<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Felicitaciones entraste al juego</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <img src="{{ $sponsor->image }}" width="250">
                <h2 class="text-white-50 mx-auto mt-4 mb-4 fw-bold" style="color: #a606c2!important; font-size: 25px">FELICITACIONES ENTRASTE AL JUEGO</h2>
                <h2 class="text-white-50 mx-auto mt-2 fw-bold" style="color: #a606c2!important;">${{ number_format($sponsor->amount, 2) }}</h2>
            </div>
        </div>
    </div>
</header>
<!-- About-->
 <section class="about-section text-center" id="about">
     <div class="container px-4 px-lg-5">
         <div class="row gx-4 gx-lg-5 justify-content-center">
             <div class="col-lg-8">
                 <h2 class="text-white mb-4">Requisitos y bases del juego.</h2>
                 <p class="text-white-50">
                     1.- Descarga la app PagoLinea y crea tu usuario<br>
                     2.- Síguenos en redes sociales, <a href="https://www.instagram.com/pagotienda.market/" class="text-decoration-none">@pagotieneda.market</a> <a href="https://www.instagram.com/pago_linea/?igshid=MzRlODBiNWFlZA%3D%3D" class="text-decoration-none">@Pago_linea</a>.<br>
                     3.- En carga de fondos sube una foto del QR escaneado y el monto que se muestra en el cupón.<br>
                     4.- Sube a redes y etiqueta a <a href="https://www.instagram.com/pagotienda.market/" class="text-decoration-none">@pagotieneda.market</a> <a href="https://www.instagram.com/pago_linea/?igshid=MzRlODBiNWFlZA%3D%3D" class="text-decoration-none">@Pago_linea</a>
                 </p>
             </div>
         </div>
     </div>
 </section>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
