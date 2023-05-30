@extends('Layouts.App')

@section('content')
    <h2 class="text-center">{{$comic->title}}</h2>
    <div class="container text-center my-5">
        <img class="mod-img"src="{{$comic->thumb}}" alt="">
        <p class="my-3">{{$comic->description}}</p>
        <a href="{{route('comics_folder.index')}}"class="btn btn-secondary">Go Back</a>
    </div>
@endsection