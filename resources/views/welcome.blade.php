<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reminder</title>

        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        
    </head>
    <body>
    <div class="container-fluid">

        <header>
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
            </header>
            <div class="blockTriangles">
            <img class="triangle1" src="{{ asset ('img/triangles.svg')}}" alt="#">
            <img class="triangle2" src="{{ asset ('img/triangles.svg')}}" alt="#">
        </div>
        <img class="logo" src="{{ asset ('img/logoshadow.svg')}}" alt="#">
        <section id="contenuAccueil">

            <div class="texte">
                <h2>Reminder ?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere, magna et sodales rutrum, libero urna faucibus metus, ut varius sapien augue id nisi. Nullam dolor nunc, condimentum sed lacus sit amet, mattis viverra orci. Quisque non
                    aliquet neque. Vivamus imperdiet lectus metus, ut semper sem tincidunt nec. In et lectus pulvinar, feugiat quam sit amet, fringilla sem.</p>
            </div>
            <div class="image img-fluid">
                <img class="postits" src="{{ asset ('img/postit.svg')}}" alt="#">
            </div>


        </section>

        <footer class="footer container-fluid">
            <ul>
                <li>
                    <a href="#"><img class="socialIcon" src="{{ asset ('img/facebook-logo.svg')}}" alt="#">
                    </a>
                </li>
                <li>
                    <a href="#"><img class="socialIcon" src="{{ asset ('img/twitter-logo.svg')}}" alt="#">
                    </a>
                </li>
                <li>
                    <a href="#"><img class="socialIcon" src="{{ asset ('img/linkedin-sign.svg')}}" alt="#">
                    </a>
                </li>
            </ul>

            <p class="mentions">Mentions légales</p>

        </footer>
       </div>
    </body>
</html>
