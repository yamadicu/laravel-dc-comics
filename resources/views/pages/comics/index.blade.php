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
        <a class="btn btn-warning" href="{{route('comics.edit', $elem)}}">edit</a>

    @empty

    <h2>Non ci sono record</h2>

    @endforelse

@endsection