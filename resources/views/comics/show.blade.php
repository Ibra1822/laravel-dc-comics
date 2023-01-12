@extends('layout.main')

@section('content')
<div class="cont-all text-center">
    <h1>Dettaglio di {{$detail->title}} </h1>
    <h4>Price : {{$detail->price}} $</h4>
    <h4>Series : {{$detail->series}}</h4>
<div class="cont text-center">
    <img src="{{$detail->thumb}}" alt="">
    <h4>Sele Date : {{$detail->sale_date}}</h4>
    <h4>Type: {{$detail->type}}</h4>
    <h5>Description:</h5>
    <p>{{$detail->desc}}</p>
</div>

<a class="btn btn-warning" href="{{route('comics.create')}}">Aggiungi Fumetto</a>
<a class="btn btn-primary" href="{{route('comics.index')}}">Home</a>

</div>

@endsection
