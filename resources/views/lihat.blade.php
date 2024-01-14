{{-- @dd($datas) --}}

@extends('layouts.main')

@section('container')
<h1 class="mb-5">Halaman Posts</h1>

@foreach ($datas as $post)
<h3>Judul : {{ $post->title }}</h3>
<h5>Excertp :  {{ $post->slug }}</h5>
<p>{!! $post->body !!}</p>
    
@endforeach

@endsection
