@extends('layout.main')

@section('content')
<h1>Modifica fumetto</h1>
<div class="home-btn text-center">
    <a class="btn btn-primary" href="{{route('comics.index')}}">Home</a>
</div>
<form action="{{route('comics.update',$comic)}}" class="p-5" method="POST">
@csrf
@method('PUT')
    <div class="mb-3 ">
        <label  class="form-label">Title</label>
        <input type="text" value="{{$comic->title}}" name="title" class="form-control" >
      </div>
      <div class="mb-3">
        <label  class="form-label">Thumb</label>
        <input type="text" value="{{$comic->thumb}}" name="thumb" class="form-control">
      </div>
      <div class="mb-3">
        <label  class="form-label">Price</label>
        <input type="text" value="{{$comic->price}}" name="price" class="form-control">
      </div>
      <div class="mb-3">
        <label  class="form-label">Series</label>
        <input type="text" value="{{$comic->series}}" name="series" class="form-control">
      </div>
      <div class="mb-3">
        <label  class="form-label">Sale Date</label>
        <input type="text" value="{{$comic->sale_date}}" name="sale_date" class="form-control">
      </div>
      <div class="mb-3">
        <label  class="form-label">Type</label>
        <input type="text" value="{{$comic->type}}" name="type" class="form-control">
      </div>
      <div class="mb-3">
        <label  class="form-label">Description</label>
        <textarea class="form-control" name="desc" id="" cols="30" rows="10"></textarea>
    </div>
      <button type="submit" class="btn btn-primary">Inserisci</button>

</form>


@endsection
