@extends('layouts.index')
@include("partials.flash")
@section('content')

<div class=" row m-0">
    @foreach ($Membre as $item)
    <div class="card col-4" style="
        @if($item->genre == "Femme")
        border : solid red 5px;
        @elseif($item->genre == "Homme")
        border : solid blue 5px;
        @else
        border-radius : 50px
        @endif" >

        <img src="{{asset("storage/img/".$item->src)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$item->nom}}</h5>
            <p class="card-text">{{$item->age}}</p>
            <p class="card-text">{{$item->genre}}</p>
            <a href="/download/{{$item->id}}" class="btn btn-primary">Télécharger</a>
        </div>
    </div>
    @if ($loop->iteration%3 ==0)
</div>
<div class="row  m-0">

    @endif
    @endforeach


@endsection
