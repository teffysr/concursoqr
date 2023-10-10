<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
</head>

<body style="background: url({{asset('qr/assets/img/bg-masthead2.jpg')}});">
<main>
    <!-- Contiene un artículo -->
    <article>
        <h2>Título del artículo</h2>
        <img src = "{{ storage_path('app/public').'/qrcode.svg' }}" alt="Mi SVG feliz"/>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Donec a diam
            lectus. Set sit amet ipsum mauris. Maecenas congue ligula as quam
            viverra nec consectetur ant hendrerit. Donec et mollis dolor. Praesent
            et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt
            congue enim, ut porta lorem lacinia consectetur.
        </p>

    </article>
</main>

<!-- Y aquí está nuestro pie de página principal que se utiliza en todas las páginas de nuestro sitio web -->

<footer>
    <p>©Copyright 2050 de nadie. Todos los derechos revertidos.</p>
</footer>
</body>
</html>
