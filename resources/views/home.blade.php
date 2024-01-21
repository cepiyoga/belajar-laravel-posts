@extends('layouts.main')

@section('container')
    <h1>Halaman Home</h1>
    
    <h5>Laravel Version: {{ Illuminate\Foundation\Application::VERSION }}</h5>
    <p>PHP Version: {{ PHP_VERSION }} </p>
    <p>Belajar Terakhir Eposode 14. View Login & Registration, next Episode 15 User Registration</p>
    <p>{{ auth()->user() }}</p>
    
@endsection
