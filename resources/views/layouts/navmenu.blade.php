<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tequilas</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@1.0.0/css/bulma.min.css" />
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/7dc3015a44.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- START NAV -->
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href={{ route('tequila.index') }}>
                    <img src="https://images.vexels.com/media/users/3/181269/isolated/preview/8d7a82f30e8bc23a9e89c2830be8fac4-ilustracion-de-tequila-de-bebida-alcoholica.png"
                        alt="Logo">
                </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item is-active" href={{ route('tequila.create') }}>
                        Agregar Tequila
                    </a>
                    <!-- Botón para "Conoce más de nosotros" -->
                    <a class="navbar-item" href="/Conocemos">
                        Conocenos
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->
    
    <!-- CONTENT -->
    @yield('content')
    <!-- END CONTENT -->

    <!-- FOOTER -->
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>Tequilas</strong> En <a href="http://tequimax-app.test/">Tequimax</a>. Productos 100% originales.
            </p>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="button is-link">Cerrar sesión</button>
            </form>
        </div>
    </footer>
    <!-- END FOOTER -->
</body>

</html>
