<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        .activo a {
            color: red;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <!-- {{ dump(request()-> routeIs('home')) }} -->
        <table class="table">
            @include('partials.nav')
            @yield('content')
        </table>
    </nav>
    <!-- <h1>Home</h1> -->
<!-- <ul>
        <li><a href="/">Home</a></li>
        <li><a href="nosotros">Nosotros</a></li>
        <li><a href="servicios">Servicios</a></li>
        <li><a href="contacto">Contacto</a></li>
    </ul> -->
</body>
</html>