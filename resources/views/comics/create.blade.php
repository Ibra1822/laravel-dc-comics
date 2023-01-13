@extends('layout.main')

@section('content')
<h1>Aggiungi un Nuovo Fumetto</h1>
<div class="home-btn text-center">
    <a class="btn btn-primary" href="{{route('comics.index')}}">Home</a>
</div>

@if ($errors->any())

<div class="errors">
<ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
</div>

@endif

<form action="{{route('comics.store')}}" class="p-5" method="POST">
@csrf
    <div class="mb-3 ">
        <label  class="form-label">Title</label>
        <input type="text" value="{{old('title')}}" name="title" class="form-control @error('title') error @enderror" >
      </div>
      <div class="mb-3">
        <label  class="form-label">Thumb</label>
        <input type="text" value="{{old('thumb')}}" name="thumb" class="form-control
        @error('thumb') error @enderror" >
      </div>
      <div class="mb-3">
        <label  class="form-label">Price</label>
        <input type="text" value="{{old('price')}}" name="price" class="form-control @error('price') error @enderror" >
      </div>
      <div class="mb-3">
        <label  class="form-label">Series</label>
        <input type="text" name="series" value="{{old('series')}}" class="form-control @error('series') error @enderror"  >
      </div>
      <div class="mb-3">
        <label  class="form-label">Sale Date</label>
        <input type="text" name="sale_date" value="{{old('sale_date')}}" class="form-control @error('sale_date') error @enderror">
      </div>
      <div class="mb-3">
        <label  class="form-label">Type</label>
        <input type="text" name="type" value="{{old('type')}}" class="form-control @error('type') error @enderror">
      </div>
      <div class="mb-3">
        <label  class="form-label">Description</label>
        <textarea class="form-control" name="desc" id="" cols="30" rows="10"></textarea>
    </div>
      <button type="submit" class="btn btn-primary">Inserisci</button>

</form>


@endsection
