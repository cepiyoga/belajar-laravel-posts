
@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row mb-5">
        <div class="col-lg-8">

            <h1 class="mb-3">{{ $post->title }}</h1>            
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-short"></i> Back to my Post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-clipboard-pulse"></i> Edit</a>
           
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
  
                <button class="btn bg-danger border-0 text-light" onclick="return confirm('Are you sure?')"><i class="bi bi-file-excel"></i> Delete</button>
  
                {{-- |<a href="" class="badge bg-danger text-decoration-none">Del</a></td> --}}
              </form>
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

            

        </div>


    </div>

</div>
    
@endsection