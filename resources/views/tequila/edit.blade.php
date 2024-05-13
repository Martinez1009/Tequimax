@extends('layouts.navmenu')

@section('title', 'Actualizar tequila')

@section('content')
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
                    <input class="input" type="text" name="Tipo" value="{{ $tequila->Tipo }}" required>
                </div>
            </div>
            <div class="field">
                <label class="label">Precio</label>
                <div class="control">
                    <input class="input" type="number" name="Precio" value="{{ $tequila->Precio }}" required>
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
@endsection
