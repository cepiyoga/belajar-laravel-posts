

@extends('layouts.main')

@section('container')

<h1 class="mb-5">Post Categories</h1>

<div class="container">
    <div class="row">
        @foreach ($categories as $category)
      
        <div class="col-md-4">
            <a href="/categories/{{ $category->slug }}">
            <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/500x400?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                <div class="card-img-overlay d-flex align-items-center p-0 fs-3">
                  <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                  
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

<div>

{{-- @foreach ($categories as $category)
    <ul>
        <li><h5><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h5></li>
    </ul>

@endforeach --}}

</div>
@endsection
