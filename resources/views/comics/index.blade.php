@extends('layout.main')

@section('content')
<h1 class="text-center">I nostri Fumetti</h1>
<div class="cont-add text-center">
    <a class="btn btn-warning" href="{{route('comics.create')}}">Aggiungi Fumetto</a>
</div>
<div class="container">
<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Type</th>
        <th scope="col">Sale Date</th>
        <th>Detail</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($comics as $item)
      <tr>
        <th scope="row">{{$item['title']}}</th>
        <td>{{$item['price']}} $</td>
        <td>{{$item['type']}}</td>
        <td>{{$item['sale_date']}}</td>
        <td><a class="btn btn-primary" href="{{route('comics.show',$item->id)}}"><i class="fa-regular fa-eye"></i></a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>


@endsection
