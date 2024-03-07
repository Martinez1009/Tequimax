<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Editar tequila</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('tequila.index') }}>Tequilas</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('tequila.create') }}>Agregar tequila</a>
                </div>
            </div>
    </nav>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Actualizar tequila</h3>
                <form action="{{ route('tequila.update', $tequila->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="Marca">Marca</label>
                        <input type="text" class="form-control" id="MArca" name="Marca"
                            value="{{ $tequila->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="Tipo">Tipo</label>
                        <input type="text" class="form-control" id="Tipo" name="Tipo" required>
                    </div>
                    <div class="form-group">
                        <label for="Precio">Precio</label>
                        <input type="number" class="form-control" id="Precio" name="Precio" required>                    
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar tequila</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>