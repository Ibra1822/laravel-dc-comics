@extends('layout.main')

@section('content')
<h1>Aggiungi un Nuovo Fumetto</h1>
<div class="home-btn text-center">
    <a class="btn btn-primary" href="{{route('comics.index')}}">Home</a>
</div>
<form action="{{route('comics.store')}}" class="p-5" method="POST">
@csrf
    <div class="mb-3 ">
        <label  class="form-label">Title</label>
        <input type="text" name="title" class="form-control" >
      </div>
      <div class="mb-3">
        <label  class="form-label">Thumb</label>
        <input type="text" name="thumb" class="form-control">
      </div>
      <div class="mb-3">
        <label  class="form-label">Price</label>
        <input type="text" name="price" class="form-control">
      </div>
      <div class="mb-3">
        <label  class="form-label">Series</label>
        <input type="text" name="series" class="form-control">
      </div>
      <div class="mb-3">
        <label  class="form-label">Sale Date</label>
        <input type="text" name="sale_date" class="form-control">
      </div>
      <div class="mb-3">
        <label  class="form-label">Type</label>
        <input type="text" name="type" class="form-control">
      </div>
      <div class="mb-3">
        <label  class="form-label">Description</label>
        <textarea class="form-control" name="desc" id="" cols="30" rows="10"></textarea>
    </div>
      <button type="submit" class="btn btn-primary">Inserisci</button>

</form>


@endsection
