@extends('layouts.app')

@section('contenido')

    <div class="container">

        <h1>Productos</h1>

        <section>

            <h2>Productos disponibles</h2>

            @if($productos->count() > 0)

                <ul>

                    @foreach($productos as $producto)

                        <li>
                            {{ $producto->nombre }}
                            - Bs. {{ number_format($producto->precio, 2) }}
                        </li>

                    @endforeach

                </ul>

            @else

                <p>No hay productos registrados.</p>

            @endif

        </section>

        @auth
            <p>
                <a href="{{ url('/productos/nuevo') }}">
                    Agregar nuevo producto
                </a>
            </p>
        @endauth

    </div>

@endsection