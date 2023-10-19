<!-- utilisation du template base -->
@extends('base')

<!-- dans la section titre je veux... -->
@section('title', $post->title)

<!-- dans la section content mettre... -->

{{-- Page article --}}
@section('content')
    <article>
        <h1>{{ $post->title }}</h1>
        <p>
            {{$post->content}}
        </p>
    </article>
@endsection

