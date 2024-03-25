<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tequilas</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@1.0.0/css/bulma.min.css" />
    <link rel="stylesheet" href="index.css">
    <script src="https://kit.fontawesome.com/7dc3015a44.js" crossorigin="anonymous"></script>

</head>

<body class="body">
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
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->
    <div class="container mt-5">
        <div class="columns is-centered">
            <div class="column is-half">
                <div class="card">
                    <header class="card-header">
                        @if ($tequila)
                        <p class="card-header-title">Marca: {{ $tequila->Marca }}</p>
                        @else
                        <p class="card-header-title">Marca: No se encontró información</p>
                        @endif
                    </header>
                    <div class="card-content">
                        @if ($tequila)
                        <div class="content">
                            <p>Tipo: {{ $tequila->Tipo }}</p>
                            <p>Precio: {{ $tequila->Precio }}</p>
                        </div>
                        @else
                        <div class="content">
                            <p>No se encontraron detalles del tequila.</p>
                        </div>
                        @endif
                    </div>
                    <footer class="card-footer">
                        @if ($tequila)
                        <a href="{{ route('tequila.edit', $tequila->id) }}" class="card-footer-item button is-primary">Editar</a>
                        <form action="{{ route('tequila.destroy', $tequila->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="card-footer-item button is-danger">Eliminar</button>
                        </form>
                        @endif
                    </footer>
                </div>
            </div>
        </div>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3 no-margin-bottom">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="button is-danger is-large">Cerrar sesión</button>
        </form>
    </div>
</body>

</html>

