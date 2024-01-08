

{{-- @dd($datas); --}}



@extends('layouts.main')

@section('container')
<h1>Halaman Test</h1>
@foreach ($datas as $data)
    <h2>{{ $data->title }}</h2>
    <h4>{{ $data->slug }}</h4>
    <p>{{ $data->excerpt }}</p>
    <p>{!! $data->body !!}</p>
 
@endforeach

@endsection