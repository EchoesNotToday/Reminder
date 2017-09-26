@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ajouter un post It</div>

                <div class="panel-body">
                  	@isset($message)
                  			<div class="message">
                  				{{ $message }}
                  			</div>
                  	@endisset
                    <form class="form-horizontal" method="POST" action="{{ route('home') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Titre</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus> @if ($errors->has('title'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>title
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contenu') ? ' has-error' : '' }}">
                            <label for="contenu" class="col-md-4 control-label">Contenu</label>

                            <div class="col-md-6">
                                <textarea id="contenu" type="text" class="form-control" name="contenu" required></textarea> @if ($errors->has('contenu'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('contenu') }}</strong>
                                    </span> @endif
                            </div>

                        </div>
                        <div class="form-group{{ $errors->has('couleur') ? ' has-error' : '' }}">
                            <label for="couleur" class="col-md-4 control-label">Couleur</label>

                            <div class="col-md-6">
                                <input id="couleur" type="couleur" class="form-control" name="couleur" required> @if ($errors->has('couleur'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('couleur') }}</strong>
                                    </span> @endif
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
