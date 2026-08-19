@extends('layouts.app')

@section('contenido')

    <h1>Catalogo de libros</h1>


    <p>
        Hay {{ count($libros) }} libros en el catálogo.
    </p>

    @foreach ($libros as $libro)
        <p>
            {{ $libro->titulo }} - {{ $libro->precio }} Bs
        </p>
    @endforeach

    <p>Catalogo atendido por Brayan isai arismendi rodriguez</p>

    <a href="/libros/nuevo">registrar un libro</a>

@endsection