@extends('Layouts.App')


@section('content')
    <h2 class="text-center">Tutti i Comics</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id Articolo</th>
                <th scope="col">Copertina</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipologia</th>
                <th scope="col">Prezzo</th>
                <th scope="col" class="text-center">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row" class="text-center">{{ $comic->id }}</th>
                    <td><img src="{{ $comic->thumb }}" alt=""></td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>
                        <a href="" class="btn btn-warning">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="" class="btn btn-primary">
                            <i class="fa-solid fa-circle-info"></i>
                        </a>
                        <form action="POST" class="d-inline-block">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger ">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
