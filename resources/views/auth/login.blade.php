@extends('layouts.app') @section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Adresse Email ou Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus> @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
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
