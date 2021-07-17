@extends('layout.app')

@section('title', 'Home Page')

@section('content')
<div class="jum">


    <div class="container">
        @foreach($films as $film)
            
            <a class="movie" href="{{route('films.show', ['film'=> $film->id])}}" style="color:white;">
                <div class="info">
                    <img src="{{$film->poster}}" alt="">
                    <div class="text">
                        <h1>{{$film->title}}</h1>
                        
                    </div>
                </div>  
           </a>
        @endforeach
    </div>
</div>
@endsection


