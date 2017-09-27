<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Reminder') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Nouveau Post-it</h4>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control titre" id="text" placeholder="Titre">
                        <textarea class="contenu form-control" placeholder="Contenu" rows="5" id="comment"></textarea>

                        <div class="btn-group">
                            <button type="button" class="vert btn btn-primary">Peu important</button>
                            <button type="button" class="orange btn btn-primary">Important</button>
                            <button type="button" class="rouge btn btn-primary">Urgent</button>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Valider</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <header>
    @guest
    <nav class="navbar">
                    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logotype.svg') }}"></a>
                    <ul class="nav navbar-right">
                        <li class="connect">
                            <a href="{{ route('login') }}">
                                <p>Connexion</p><img class="icon" src="{{ asset ('img/login-square-arrow-button-outline.svg')}}" alt="#"></a>
                        </li>
                        <li class="signin">
                            <a href="{{ route('register') }}">
                                <p>Inscription</p><img class="icon" src="{{ asset ('img/new-file.svg')}}" alt="#"></a>
                        </li>
                    </ul>
                </nav>
        @else
        <nav class="navbar">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{asset('img/logotype.svg')}}"></a>

            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Rechercher">
                </div>
                <button type="submit" class="btn btn-default"><img class="searchIcon" src="{{ asset('img/magnifying-glass.svg')}}" alt="#"></button>
            </form>

            <ul class="nav navbar-right">

                <li class="connect">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                        <img src="{{ asset('img/square-add-button.svg')}}" alt="#">
                        <p>Ajouter un post-it</p>
                    </button>
                </li>
                <li class="account">
                    <a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                        <img class="avatar" src="{{asset('img/chirac.jpg')}}" alt="#">
                        <p>{{ Auth::user()->name }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><img class="disconnect" src="{{asset('img/logout.svg')}}" alt="#"></a>


                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}>
                        
                </li>
                <li>
                    <a href="{{ url('/currentUserDelete')}}">Delete User</a>
                </li>
                </ul>
            </nav>
            @endguest
        </header>
        @yield('content')

        <footer class="footer container-fluid">
            <ul>
                <li>
                    <a href="#"><img class="socialIcon" src="{{ asset('img/facebook-logo.svg')}}" alt="#">
                    </a>
                </li>
                <li>
                    <a href="#"><img class="socialIcon" src="{{ asset('img/twitter-logo.svg')}}" alt="#">
                    </a>
                </li>
                <li>
                    <a href="#"><img class="socialIcon" src="{{asset('img/linkedin-sign.svg')}}" alt="#">
                    </a>
                </li>
            </ul>

            <p class="mentions">Mentions légales</p>

        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
