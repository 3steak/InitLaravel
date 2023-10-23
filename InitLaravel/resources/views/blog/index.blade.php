<!-- utilisation du template base -->
{{-- je récupere le header avec le doctype...  --}}
@extends('base')

<!-- je renseigne le titre -->
@section('title', 'Accueil du blog')

<!-- dans la section content mettre... -->
@section('content')
<h1>Mon blog</h1>

{{-- raccourci foreach --}}
@foreach ($posts as $post)
    <article>
        <h2>{{ $post->title }}</h2>
        <p>
            {{$post->content}}
        </p>
        <p> <a href="{{route('blog.show', ['slug'=> $post->slug, 'post' =>$post->id])  }}" class="btn btn-primary" >Lire la suite</a></p>
    </article>
@endforeach

{{-- générer pagination ( que si paginate(1)) --}}
{{ $posts->links() }}

{{-- fin renseignement section content --}}
@endsection