

@extends('layouts.main')

@section('container')
    
    <h1>Halamab About</h1>
    <h3>Name: {{ $name }}</h3>
    <h3>Email: {{ $email }}</h3>
    <img src="assets/img/{{ $image }}" alt="gambar" class="img-thumbnail rounded-circle">
@endsection