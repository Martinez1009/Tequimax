@extends('layouts.navmenu')

@section('title', 'Tequilas')

@section('content')
<div class="columns is-multiline">
    <!-- Inicio de la iteración de tequilas -->
    @foreach ($tequila as $tequila)
    <div class="column is-4">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="https://www.elfinanciero.com.mx/resizer/O91H4s-t56691xJTVI3R2P7--8M=/1440x810/filters:format(jpg):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/elfinanciero/TSDWNU2LXRC6LH7KFRGR4NSTPQ.jpg"
                        alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img src="https://st.depositphotos.com/1001069/2594/i/450/depositphotos_25944355-stock-photo-bottle-of-gold-tequila-and.jpg"
                                alt="Placeholder image">
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
@endsection
