@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Afficher les post It</div>

                <div class="panel-body">
                    @if (count($postits) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Current postits
                        </div>

                        <div class="panel-body">
                            @foreach ($postits as $postit)
                            <div>
                                <h1>{{ $postit->titre }}</h1>
                                <p>{{ $postit->contenu }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
