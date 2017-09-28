@extends('layouts.app') @section('content')
<!-- FORMULAIRE CONNEXION -->
<div class="blockTriangles">
            <img class="triangle1" src="{{asset('img/triangles.svg')}}" alt="#">
            <img class="triangle2" src="{{asset('img/triangles.svg')}}" alt="#">
        </div>
        <img class="logo" src="{{asset('img/logoshadow.svg')}}" alt="#">
        <section id="contenuAccueil">
            <div class="formulaire">
                <p>Connexion</p>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">{{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input for="name" type="text" class="form-control" id="name" placeholder="Nom / E-mail" name="name"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input for="password" name="password" type="password" class="form-control" id="password" placeholder="Mot de passe"/>
                        </div>
                    </div>
                    <a href="{{ route('password.request') }}">
                        <p class="oubli">mot de passe oublié ?</p>
                    </a>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-12">
                            <button type="submit" class="btn btn-default">Valider</button>
                        </div>
                    </div>
                </form>
            </div>
            
            <!-- FIN FORMULAIRE -->
            <div class="image">
                <img class="postits" src="{{asset('img/postit.svg')}}" alt="#">
            </div>


        </section>
@endsection
