@extends('layouts.navmenu')

@section('title', 'Agregar Tequila')

@section('content')
<div class="container h-100 mt-5">
    <div class="columns is-centered">
        <div class="column is-half">
            <h3 class="title is-3">Agregar Tequila</h3>
            <form action="{{ route('tequila.store') }}" method="post">
                @csrf
                <div class="field">
                    <label class="label">Marca</label>
                    <div class="control">
                        <input class="input" type="text" name="Marca" required>
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
                        <button class="button is-primary" type="submit">Crear Tequila</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
