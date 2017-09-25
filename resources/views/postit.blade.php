@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Afficher les post It</div>

                <div class="panel-body">
                    @if (count($datas) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Current postits
                        </div>

                        <div class="panel-body">
                            @for ($i = 0; $i < count($datas); $i++)
                                @foreach ($datas[$i] as $postit)
                                    <div>
                                        <a href='{{ url("/delete/$postit->id")}}'>supprimer</a>
                                        <h1>{{ $postit->titre }}</h1>
                                        <p>{{ $postit->contenu }}</p>
                                        <p>{{ $postit->id}}</p>
                                    </div>
                                @endforeach
                            @endfor
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
