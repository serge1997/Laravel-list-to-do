<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>

        {{-- css bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        {{-- link css --}}

        <link rel="stylesheet" href="/css/style.css">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light pl-5 pr-5">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.png" alt="Logo">
                    </a>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            Ínicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/criar/tarefa" class="nav-link">
                            Criar tarefas
                        </a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                Meus tarefas
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                Hoje
                            </a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="post">
                                @csrf
                                <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                                    Sair
                                </a>
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a href="/register" class="nav-link">
                                Cadastrar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/login" class="nav-link">
                                Login
                            </a>
                        </li>
                    @endguest
                </ul>
            </nav>
        </header>
        <div class="container">
            @if(session('msg'))
                <p class="alert alert-success" role="alert">{{ session('msg') }}</p>
            @endif

            @if(session('notif'))
                <p class="alert alert-success">{{session('notif')}}</p>
            @endif
        </div>
       


        @yield('content')


        <footer>
            <p>&copy; LIST-TO-DO desenvolvido por SERGE GOGO</p>
        </footer>

        {{-- ioni-icon --}}
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

        {{-- jquery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

        <script src="/js/app.js"></script>
    </body>
</html>
