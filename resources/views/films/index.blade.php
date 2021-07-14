@extends('layout.app')

@section('title', 'Films Page')

@section('content')
<h1>Films Page</h1>
<div class="films_container">
    @foreach($films as $film)
        <div class="description container">
            <img src="{{$film->poster}}" alt="">
            <h2>{{$film->title}}</h2>
            
                <!-- <p> {{$film->description}} </p> -->
            </div>
             
        </div>
        </div>
        
    @endforeach
</div>


@endsection