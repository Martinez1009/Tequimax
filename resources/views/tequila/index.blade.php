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
    <div class="container mt-5">
        <div class="columns is-multiline">
            <!-- Inicio de la iteración de tequilas -->
            @foreach ($tequila as $tequila)
            <div class="column is-4">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://www.elfinanciero.com.mx/resizer/O91H4s-t56691xJTVI3R2P7--8M=/1440x810/filters:format(jpg):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/elfinanciero/TSDWNU2LXRC6LH7KFRGR4NSTPQ.jpg" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-48x48">
                                    <img src="https://st.depositphotos.com/1001069/2594/i/450/depositphotos_25944355-stock-photo-bottle-of-gold-tequila-and.jpg" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4">Marca: {{ $tequila->Marca }}</p>
                                <p class="subtitle is-6">Tipo: {{ $tequila->Tipo }}</p>
                                <p class="subtitle is-6">Precio: {{ $tequila->Precio }}</p>
                            </div>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="{{ route('tequila.edit', $tequila->id) }}" class="card-footer-item">Editar</a>
                        <form action="{{ route('tequila.destroy', $tequila->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="card-footer-item">Eliminar</button>
                        </form>
                    </footer>
                </div>
            </div>
            @endforeach
            <!-- Fin de la iteración de tequilas -->
        </div>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3 no-margin-bottom">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger btn-lg">Cerrar sesión</button>
        </form>
    </div>
</body>

</html>

