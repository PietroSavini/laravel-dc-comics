@extends('Layouts.App')

@section('content')
    <form action="{{ route('comics_folder.update', $comic->id) }}" method="POST">
        @method('PUT')
        @csrf
        <h2 class="text-center my-3">modifica del comic: {{ $comic->title }}</h2>
        @if ($errors->any())
            <ul class="alert alert-danger">
                <h2 class="text-center">verifica l'inserimento dei dati:</h2>
                @foreach ($errors->all() as $error)
                    <li class="m-3">{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="form-group">
            <label for="img">immagine</label>
            <input value="{{ old('thumb') }}" type="text" class="form-control @error('thumb')is-invalid @enderror"
                id="img" name="thumb">
            @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">prezzo</label>
            <input value="{{ old('price') }}" type="text" class="form-control @error('price')is-invalid @enderror"
                id="price" name="price">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="series">series</label>
            <input value="{{ old('series') }}" type="text" class="form-control @error('series')is-invalid @enderror"
                id="series" name="series">
            @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">data di uscita</label>
            <input value="{{ old('sale_date') }}" type="date"
                class="form-control @error('sale_date')is-invalid @enderror" id="sale_date" name="sale_date">
            @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tipo">tipo</label>
            <input value="{{ old('type') }}" type="text" class="form-control @error('type')is-invalid @enderror"
                id="tipo" name="type">
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description" class="d-block">descrizione</label>
            <textarea name="description" id="description" cols="92" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Applica modifiche</button>
    </form>
@endsection
