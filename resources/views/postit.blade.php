@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <form method="post" action="{{ route('postit')}}">
        
                        {{ csrf_field() }}
            <input type="text" name="search" placeholder="rechercher">
            <button type="submit">ok</button>
        </form>
            <div class="panel panel-default">
                <div class="panel-heading">Afficher les post It <a href='{{ url("/deleteall")}}'>Supprimer tous les post-it </a></div>

                @if (count($datas) > 0)
                <div class="panel-body">                 
                   <div class="panel panel-default">
                    <div class="panel-heading">
                        Current postits
                    </div>

                    <div class="panel-body">
                        @if (isset($message))
                        <div class="message ">{{ $message }}</div>
                        @endif 
                       @foreach ($datas as $postit) 
                            <div>
                            <a href='{{ url("/delete/$postit->id")}}'>supprimer</a>
                            <h1>{{ $postit->titre }}</h1>
                            <p>{{ $postit->contenu }}</p>
                            <p>{{ $postit->id}}</p>
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
            @else 
            ok 
            @endif
        </div>
    </div>
</div>
</div>
@endsection
