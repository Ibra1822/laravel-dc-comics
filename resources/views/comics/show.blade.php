@extends('layout.main')

@section('content')
<div class="cont-all text-center">
    <h1>Dettaglio di {{$comic->title}} </h1>
    <h4>Price : {{$comic->price}} $</h4>
    <h4>Series : {{$comic->series}}</h4>
<div class="cont text-center">
    <img src="{{$comic->thumb}}" alt="">
    <h4>Sele Date : {{$comic->sale_date}}</h4>
    <h4>Type: {{$comic->type}}</h4>
    <h5>Description:</h5>
    <p>{{$comic->desc}}</p>
</div>

<a class="btn btn-warning" href="{{route('comics.create')}}">Aggiungi Fumetto</a>
<a class="btn btn-primary" href="{{route('comics.index')}}">Home</a>

</div>

@endsection
