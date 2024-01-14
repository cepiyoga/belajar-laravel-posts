

@extends('layouts.main')

@section('container')
<h1 class="mb-5">Halaman Posts</h1>

@foreach ($posts as $post)
    <article class="mb-5">
        
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->slug }}</a>
        </h2>
            
        <h5>{{ $post['slug'] }}</h5>

        <p>{{ $post->excerpt }}</p>
            
    </article>
@endforeach

@endsection
