<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Aquí las vistas podrán agregar cada una su título -->
    <title>@yield('title')</title>

    <!-- favicon -->
    <!-- estilos -->

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- header -->
     @include('layouts._partials.menu')
    <!-- nav-->

    <!-- Aquí las vistas podrán agregar cada una su contenido -->
    @yield('content')

    <!-- footer -->
    @yield('scripts')
</body>
</html>


