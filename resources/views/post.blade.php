{{-- @dd($post->category); --}}

@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="mb-3">{{ $post->title }}</h1>            
            <p>By <a class="text-decoration-none" href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>, in <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
            <article class="my-3 fs-5">

                
                @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">

                    <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
                    
                @else
                    
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="img-fluid">
                @endif



                {!! $post->body !!}
            </article>

            <a class="text-decoration-none" href="/posts">Back</a>

        </div>


    </div>

</div>

@endsection