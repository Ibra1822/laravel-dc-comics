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
        <th class="text-center">Control</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($comics as $comic)
      <tr>
        <th scope="row">{{$comic['title']}}</th>
        <td>{{$comic['price']}} $</td>
        <td>{{$comic['type']}}</td>
        <td>{{$comic['sale_date']}}</td>
        <td class="d-flex justify-content-evenly">
            <a class="btn btn-primary" href="{{route('comics.show',$comic)}}"><i class="fa-regular fa-eye"></i></a>
            <a class="btn btn-warning" href="{{route('comics.edit',$comic)}}"><i class="fa-solid fa-pen"></i></a>
            <form action="{{route('comics.destroy',$comic)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>

  {{$comics->links()}}

</div>
@endsection
