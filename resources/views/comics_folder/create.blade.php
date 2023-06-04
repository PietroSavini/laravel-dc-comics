@extends('Layouts.App')

@section('content')
<form action="{{route('comics_folder.store')}}" method="POST">
  @csrf
  <h2 class="text-center my-3">modifica del comic:</h2>
    <div class="form-group">
      <label for="title">titolo</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
      <label for="img">immagine</label>
      <input type="text" class="form-control" id="img" name="thumb">
    </div>
    <div class="form-group">
      <label for="price">prezzo</label>
      <input type="text" class="form-control" id="price" name="price">
    </div>
    <div class="form-group">
      <label for="series">series</label>
      <input type="text" class="form-control" id="series" name="series">
    </div>
    <div class="form-group">
      <label for="sale_date">data di uscita</label>
      <input type="date" class="form-control" id="sale_date" name="sale_date">
    </div>
    <div class="form-group">
        <label for="tipo">tipo</label>
        <input type="text" class="form-control" id="tipo" name="type">
      </div>
    <div class="form-group">
      <label for="description" class="d-block">descrizione</label>
      <textarea name="description" id="description" cols="92" rows="10"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">aggiungi comic</button>
  </form>
@endsection