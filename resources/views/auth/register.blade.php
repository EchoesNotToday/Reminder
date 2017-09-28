@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
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