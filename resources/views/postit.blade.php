@extends('layouts.app') @section('content')
<div class="blockTriangles">
        <img class="triangle1" src="{{asset('img/triangles.svg')}}" alt="#">
        <img class="triangle2" src="{{asset('img/triangles.svg')}}" alt="#">
    </div>
    <section class="contenuAccueil">
@if (count($datas) == 0)

    <p>Désolé, vous n'avez pas de post-it. <br>Cordialement, Gérard de la maintenance.</p>
@else
@foreach ($datas as $postit)


        <div class="postit">
            <div class="blocTitre">
                <h4 class="titrePostit">{{ $postit->titre}}</h4>
                <a href='{{ url("/delete/$postit->id")}}'>
                    <img class="trash" src="{{ asset ('img/rubbish-bin-delete-button.svg')}}" alt="#" >
                </a>
            </div>
            <div class="blocDate">
                <p class="datePostit">{{ $postit->created_at}}</p>
                <div id="triangle-left" class="{{ $postit->couleur}}"></div>
            </div>
            <p class="contenuPostit">{{ $postit->contenu}}</p>
        </div>

    @endforeach
    @endif
    </section>
@endsection
