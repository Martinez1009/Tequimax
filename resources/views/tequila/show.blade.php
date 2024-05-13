@extends('layouts.navmenu')

@section('title', 'Detalles del Tequila')

@section('content')
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
@endsection
