@extends('layout.app')

@section('title', 'Films Page')

@section('content')
<h1>Films Page</h1>

@foreach($films as $film)
    <img src="{{$film->poster}}" alt="">
    <h2>{{$film->title}}</h2>
    <div class="description">
       <p> {{$film->description}} </p> 
    </div>
@endforeach

@endsection