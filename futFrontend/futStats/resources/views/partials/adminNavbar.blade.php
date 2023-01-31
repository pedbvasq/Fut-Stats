<html>

<head>
    <title>FutStats - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


</head>

<body>
    @csrf
    <nav id="navbar" class="navbar navbar-expand">
        <a class="logo-image" href="/"> 
            <img src="{{ asset('/assets/images/logo.PNG') }}" alt="Logo Futstats" class="img-fluid" width="250"> 
        </a>

        <div id="elements">
            <a href="/ligas" class="navbar-brand">Ligas</a>
            <a href="/jugadores" class="navbar-brand">Jugadores</a>
            <a href="equipos" class="navbar-brand">Equipos</a>
            <a>Admin Mode</a>
        </div>
    </nav>
   
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>

<style>
    #navbar{
        background-color: rgba(18,18,18,255)!important;
    }

    #elements>a{
        padding: 0px 150px;
        color: white;
        font-family: Monospace, Lucida console;
        font-weight: bold;

    }
    #elements>a:focus{
        color: #8B0000;
    }

    body {
        background-color: rgba(33,37,41,255);
    }


</style>