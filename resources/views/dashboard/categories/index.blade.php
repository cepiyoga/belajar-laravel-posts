
@extends('dashboard.layouts.main')

@section('container')



<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Categories</h1>  
</div>

<div class="table-responsive small col-lg-4">
    <a href="/dashboard/categories/create" class="btn btn-secondary"><i class="bi bi-plus-square"></i> Create New Category</a>

    @if(session()->has('success'))
    
        <div class="alert alert-primary mt-2" role="alert">
         {{ session('success') }}
        </div>

    @endif

      

    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>    
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
         
          <td>
            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info text-decoration-none"><i class="bi bi-eye-fill"></i>View</a>
            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning text-decoration-none"><i class="bi bi-wrench"></i> Edit</a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf

              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi bi-x-lg"></i> Del</button>

              {{-- |<a href="" class="badge bg-danger text-decoration-none">Del</a></td> --}}
            </form>
          
        </tr>

        
            
        @endforeach
      </tbody>
    </table>
  </div>
    
@endsection