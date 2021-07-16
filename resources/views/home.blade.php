@extends('layout.app')

@section('title', 'Home Page')

@section('content')
<div class="container">
    @foreach($films as $film)
        <div class="movie">
            
            <div class="info">
                
                <img src="{{$film->poster}}" alt="">
                <div class="text">
                    <h1>{{$film->title}}</h1>
                    <p>  {{$film->description}}</p>
                </div>
            
            </div>
          
            
        </div>
        @endforeach
        



@endsection
</div>

