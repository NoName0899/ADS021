<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    @yield('title')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.3.3/bootbox.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/padrao.css') }}" rel="stylesheet">
    <style>
        body{
            background: #000000;
            color: #fff;
        }
        .card-header{
            color: #fff;
        }
    </style>

    @yield('style')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" id="titulo">LucasDev</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}" style="color: #fff;">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color: #fff;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="areaDropdown" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false" style="color: #fff">
                                    Área
                                </a>
                                <div class="dropdown-menu" aria-labelledby="areaDropdown">
                                    <a class="dropdown-item" href="{{url('/area/formulario')}}" id="item">Criar</a>
                                    <a class="dropdown-item" href="{{url('/area/listar')}}" id="item">Listar</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="condominioDropdown" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false" style="color: #fff">
                                    Condominio
                                </a>
                                <div class="dropdown-menu" aria-labelledby="condominioDropdownDropdown">
                                    <a class="dropdown-item" href="{{url('/condominio/formulario')}}" id="item">Criar</a>
                                    <a class="dropdown-item" href="{{url('/condominio/listar')}}" id="item">Listar</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="moradorDropdown" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false" style="color: #fff">
                                    Morador
                                </a>
                                <div class="dropdown-menu" aria-labelledby="moradorDropdown">
                                    <a class="dropdown-item" href="{{url('/morador/formulario')}}" id="item">Criar</a>
                                    <a class="dropdown-item" href="{{url('/morador/listar')}}" id="item">Listar</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="reservaDropdown" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false" style="color: #fff">
                                    Reserva
                                </a>
                                <div class="dropdown-menu" aria-labelledby="reservaDropdown">
                                    <a class="dropdown-item" href="{{url('/reserva/formulario')}}" id="item">Criar</a>
                                    <a class="dropdown-item" href="{{url('/reserva/listar')}}" id="item">Listar</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="unidadeDropdown" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false" style="color: #fff">
                                    Unidade
                                </a>
                                <div class="dropdown-menu" aria-labelledby="unidadeDropdown">
                                    <a class="dropdown-item" href="{{url('/unidade/formulario')}}" id="item">Criar</a>
                                    <a class="dropdown-item" href="{{url('/unidade/listar')}}" id="item">Listar</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="visitanteDropdown" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false" style="color: #fff">
                                    Visitantes
                                </a>
                                <div class="dropdown-menu" aria-labelledby="visitanteDropdown">
                                    <a class="dropdown-item" href="{{url('/visitante/formulario')}}" id="item">Criar</a>
                                    <a class="dropdown-item" href="{{url('/visitante/listar')}}" id="item">Listar</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: #fff;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
            @yield('formulario')
            @yield('listar')
        </main>
    </div>
    <div id="script">
        @yield('js')
    </div>

</body>
</html>
