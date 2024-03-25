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
    <style>
        /* Estilos personalizados */
        .navbar {
            background-color: #333; /* Cambia el color de fondo del navbar */
            color: white; /* Cambia el color del texto en los elementos del navbar */
        }

        body {
            background-color: #f0f0f0; /* Cambia el color de fondo del cuerpo de la página */
        }
    </style>
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
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->
    <div class="container h-100 mt-5">
        <div class="columns is-centered">
            <div class="column is-half">
                <h3 class="title is-3">Actualizar tequila</h3>
                <form action="{{ route('tequila.update', $tequila->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <label class="label">Marca</label>
                        <div class="control">
                            <input class="input" type="text" name="Marca" value="{{ $tequila->Marca }}" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Tipo</label>
                        <div class="control">
                            <input class="input" type="text" name="Tipo" required>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Precio</label>
                        <div class="control">
                            <input class="input" type="number" name="Precio" required>
                        </div>
                    </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-primary" type="submit">Actualizar tequila</button>
                        </div>
                        <div class="control">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="button is-danger">Cerrar sesión</button>
                            </form>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
