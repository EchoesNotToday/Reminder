<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Reminder</title>

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
                <form class="modal-content" method="post" action="{{ route('home') }}" id="form-casse-couille">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Nouveau Post-it</h4>
                    </div>
                    <div class="modal-body">
                        <input type="text" class="form-control titre" id="text" name="title" placeholder="Titre">
                        <textarea class="contenu form-control" name="contenu" placeholder="Contenu" rows="5" id="comment"></textarea>

                        <!-- <div class="btn-group">
                            <button type="radio" class="vert btn btn-primary">Peu important</button>
                            <button type="radio" class="orange btn btn-primary">Important</button>
                            <button type="radio" class="rouge btn btn-primary">Urgent</button>
                        </div> -->
                        <div class="btn-group">
                            <label class="radio-inline">
                                <input type="radio" name="optradio" value="vert">Vert</label>
                                <label class="radio-inline">
                                    <input type="radio" name="optradio" value="orange">Orange</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" value="rouge">Rouge</label>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-default" data-dismiss="modal" onclick="event.preventDefault();
                                    document.getElementById('form-casse-couille').submit();">Valider</button>
                                </div>
                            </form>

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
                                <a class="navbar-brand" href="{{ url('/postit') }}"><img src="{{asset('img/logotype.svg')}}"></a>
                                <form class="navbar-form navbar-left" method="post" action="{{ route('postit')}}" >
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" name="search" class="form-control" placeholder="Rechercher">
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
                                            <img class="avatar" src="{{asset('img/man-user.svg')}}" alt="#">
                                            <p>{{ Auth::user()->name }}</p>
                                        </a>
                                    </li>
                                    <li class="deco">
                                        <a href="{{ route('logout') }}" style="width: auto;"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"><img class="disconnect" src="{{asset('img/logout.svg')}}" alt="#"></a>


                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}>

                                        </li>
                                        <li class="del" style="text-align: right;">
                                            <a class ="supprimer" style="color: grey;" href="{{ url('/currentUserDelete')}}">Supprimer Compte</a>
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
