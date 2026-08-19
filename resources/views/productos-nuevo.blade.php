@extends('layouts.app')

@section('contenido')

<div class="container">

    <h1>Nuevo producto</h1>

    <p>Agregar un nuevo producto al catálogo.</p>

    <form method="POST" action="{{ url('/productos') }}">

        @csrf

        <div>
            <label for="nombre">Nombre del producto</label>

            <input
                type="text"
                id="nombre"
                name="nombre"
                placeholder="Ejemplo: Chorizo"
                required
            >
        </div>

        <br>

        <div>
            <label for="precio">Precio</label>

            <input
                type="number"
                id="precio"
                name="precio"
                step="0.01"
                min="0"
                placeholder="Ejemplo: 25.00"
                required
            >
        </div>

        <br>

        <button type="submit">
            Guardar producto
        </button>

    </form>

</div>

@endsection