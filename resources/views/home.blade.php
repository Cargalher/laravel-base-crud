@extends('layout.app')

@section('title', 'Home Page')

@section('content')
<h1>il mio content</h1>

@foreach($films as $film)
        <div>
            
           <img src="{{$film->poster}}" alt="">
            <h1>{{$film->title}}</h1>
            <p>{{$film->description}}</p>
            
        </div>
        @endforeach
        



@endsection