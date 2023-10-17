<!-- utilisation du template base -->
@extends('base')

<!-- dans la section titre je veux... -->
@section('title', $post->title)

<!-- dans la section content mettre... -->

@section('content')
    <article>
        <h2>{{ $post->title }}</h2>
        <p>
            {{$post->content}}
        </p>
    </article>


@endsection