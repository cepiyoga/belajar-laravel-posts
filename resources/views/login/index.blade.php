@extends('layouts.main')


@section('container')

    <main class="form-signin w-100 m-auto">

        <div class="row">
            
            @if (session()->has('success'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
                
            @endif


            @if (session()->has('loginError'))

            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
                
            @endif


            <div class="col-md-12">
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                
                <form action="/login" method="post">
                @csrf
            
                <div class="form-floating">
                    <input type="email" class="form-control @error('email')
                        is-invalid
                    @enderror" id="email" name="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
              
                    @error('email')
                        
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
          
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>    
                <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
                <small class="d-block text-center mt-3">Not register? <a href="/register" class="text-decoration-none">Register Now!</a></small>
                </form>

            </div>
        </div>
        
    </main>
    
@endsection