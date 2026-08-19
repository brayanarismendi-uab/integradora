<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" contenido="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" contenido="{{ csrf_token() }}">

    <title>@yield('titulo', 'Artezzo')</title>

    <
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <header>
        <h1>Librería El Lápiz</h1>

        <p>Bienvenidos a Librería El Lápiz, donde puedes encontrar libros de todo tipo</p>

        <button type="button" id="btn-tema" class="boton-modo">
            Cambio de modo
        </button>
    </header>

    <hr>

    <nav>
        <a href="/">inicio</a> |
        <a href="/productos">productos</a> |
        <a href="#">nosotros</a>
        @guest
            @if (Route::has('login'))
                | <a href="{{ route('login') }}">{{ __('Login') }}</a>
            @endif
        @else
            | <span>{{ Auth::user()->name }}</span>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
            </form>
        @endguest
    </nav>

    <hr>

    <main>
        @yield('contenido')
    </main>

    <hr>

    <footer>
        <p>Integradora - Brayan Isai Aismendi Rodriguez - 18 de agosto de 2026</p>
        
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
