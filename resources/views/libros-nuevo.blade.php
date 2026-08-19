@extends('layouts.app')

@section('contenido')

    <h1>registrar libro</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form action="/libros/nuevo" method="POST">

        @csrf

        <label for="titulo">titulo</label>
        <input type="text" id="titulo" name="titulo">

        <br><br>

        <label for="precio">precio en Bs</label>
        <input type="number" id="precio" name="precio">
        <br><br>

        <button type="submit">Registrar libro</button>

    </form>

@endsection