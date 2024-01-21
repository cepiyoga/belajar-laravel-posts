@extends('layouts.main')


@section('container')

    <main class="form-signin w-100 m-auto">

        <div class="row">
            <div class="col-md-12">
                <h1 class="h3 mb-3 fw-normal text-center">Registraton Form</h1>
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control @error('name')
                            is-invalid
                        @enderror" name="name" id="name" placeholder="Your Name" required value="{{ old('name') }}">
                        <label for="name">Your Name</label>
                        @error('name')
                        
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control @error('username')
                            is-invalid
                        @enderror " name="username" id="username" placeholder="User Name" required value="{{ old('username') }}">
                        <label for="username">User Name</label>
                        @error('username')
                        
                        <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>
                
            
                <div class="form-floating">
                    <input type="email" name='email' class="form-control @error('email')
                        is-invalid
                    @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        
                    <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                    
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password')
                        is-invalid
                    @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                        
                    <div class="invalid-feedback">
                        min : 5char, upper, lower and number
                      </div>
                    @enderror
                </div>    
                <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
                <small class="d-block text-center mt-3">Already Registered?, <a href="/login" class="text-decoration-none"> Please Login</a></small>
                </form>

            </div>
        </div>
        
    </main>
    
@endsection