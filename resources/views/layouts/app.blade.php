<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sena Academico') }}</title>

    @yield('css')
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css\app.css') }}">
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Dentro del head de tu vista -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.js"></script>
</head>
<style>
    .navbar-brand {
        margin-left: 30px; 
        margin-top: 10px; 
        /* Aplica un margen de 20 píxeles a la izquierda del enlace */
    }
</style>

<body style="background-color: withe;">
    <div id="app" style="border-bottom: 2rem;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="navBarWrapper">
            <a href="{{ url('/home') }}">
            <img src="../img/logo.png" style="width: 110px; height: 70px;" alt="login form" class="img-fluid" />
            </a>
        <br>
        <a class="navbar-brand" href="{{ url('/home') }}">
                    <h1>Sena-Academico</h1>
                </a>

        <div class="container">
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto" id="navLink">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link"href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        @else

                       

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                @can('admin.usuarios')
                                <a class="nav-link" href="{{ url('usuarios') }}">Usuarios</a>
                               
                                @endcan
                                @can('admin.vista_register_materia')
                                <a class="nav-link" href="{{ url('vista_register_materia') }}">Materias</a>
                                @endcan
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <script src="{{ asset('js/horario.js') }}" defer></script>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>