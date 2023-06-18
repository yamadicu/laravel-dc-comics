@extends('layout.app')

@section('title')
    laravel dc comics | Comics Index
@endsection

@section('content')
    <h1>Pagina Comics</h1>

    @forelse ( $comics as $elem )

        <a href="{{route('comics.show', ['comic' => $elem->id])}}">
            <h6>{{ $elem->title }}</h6>
        </a>

        <a class="btn btn-warning my-1" href="{{route('comics.edit', $elem)}}">modifica</a>

        <form action="{{route('comics.destroy',  $elem) }}" method="POST">
            @csrf
            @method('DELETE')
            <a  onclick="return cancellaComic()" type="submit" class="btn btn-danger my-1">Cancella</a>
        </form>

    @empty

    <h2>Non ci sono record</h2>

    @endforelse

@endsection

@section('script-custom')
    function cancellaComic(){
        return confirm('sicuro di voler cancellare il fumetto?')
    }
@endsection