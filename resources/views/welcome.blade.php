<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TequiMax</title>
        <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
        <!-- Bulma Version 1-->
        <link rel="stylesheet" href="https://unpkg.com/bulma@1.0.0/css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="welcome.css">
    </head>

    <body class="bg-image">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            <section class="hero is-info is-fullheight">
                <div class="hero-head">
                    <nav class="navbar">
                        <div class="container">
                            <div class="navbar-brand">
                                <a class="navbar-item" href="../">
                                    <img src="https://images.vexels.com/media/users/3/181269/isolated/preview/8d7a82f30e8bc23a9e89c2830be8fac4-ilustracion-de-tequila-de-bebida-alcoholica.png" alt="Logo">
                                </a>
                                <span class="navbar-burger burger" data-target="navbarMenu">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </div>
                            <div id="navbarMenu" class="navbar-menu">
                                <div class="navbar-end">
                                    @if (Route::has('login'))
                                        <span class="navbar-item">
                                            @auth
                                                <a class="button is-white is-outlined" href="{{ url('/tequila/index') }}">
                                                    <span class="icon">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                                    <span>Inicio</span>
                                                </a>
                                            @else
                                                <a class="button is-white is-outlined" href="{{ route('login') }}">
                                                    <span class="icon">
                                                        <i class="fa fa-sign-in"></i>
                                                    </span>
                                                    <span>Log in</span>
                                                </a>

                                                @if (Route::has('register'))
                                                    <a class="button is-white is-outlined" href="{{ route('register') }}">
                                                        <span class="icon">
                                                            <i class="fa fa-user-plus"></i>
                                                        </span>
                                                        <span>Register</span>
                                                    </a>
                                                @endif
                                            @endauth
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="hero-body">
                    <div class="container has-text-centered">
                        <div class="column is-6 is-offset-3">
                            <h1 class="title">
                                TequiMax
                            </h1>
                            <h2 class="subtitle">
                                Descubre el sabor auténtico del alma mexicana en cada gota.
                            </h2>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
