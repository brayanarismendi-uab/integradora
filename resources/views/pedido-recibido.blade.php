@extends('layouts.app')

@section('titulo', 'Pedido recibido')

@section('contenido')

    <section>

        <h2>Pedido recibido, case</h2>

        <p><strong>Nombre:</strong> {{ $nombre }}</p>

        <p><strong>Correo:</strong> {{ $correo }}</p>

        <p><strong>Pedido:</strong> {{ $pedido }}</p>

    </section>

@endsection