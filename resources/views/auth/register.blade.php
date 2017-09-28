@extends('layouts.app')

@section('content')

<div class="blockTriangles">
            <img class="triangle1" src="{{asset('img/triangles.svg')}}" alt="#">
            <img class="triangle2" src="{{asset('img/triangles.svg')}}" alt="#">
        </div>
        <img class="logo" src="{{asset('img/logoshadow.svg')}}" alt="#">
        <section id="contenuAccueil">

            <!-- FORMULAIRE CONNEXION -->
            <div class="formulaire">
                <p>Inscription</p>
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nom" for="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" for="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input name="password" type="password" class="form-control" id="password" placeholder="Mot de passe" for="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input name="password_confirmation" type="password" class="form-control" id="password" placeholder="Mot de passe" for="password">
                        </div>
                    </div>
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