@extends('layout.app')

@section('title', 'Films Page')

@section('content')
<div class="container">
        
            <div class="post">
                <h1 class="display-1">{{$film->title}}</h1>
                <img src="{{$film->poster}}" alt="">
                <p class="lead"> {{$film->description}} </p>
            </div>
    
</div>



@endsection