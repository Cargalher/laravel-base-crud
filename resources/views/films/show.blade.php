@extends('layout.app')

@section('title', 'Films Page')

@section('content')
<div class="container">
        
            <div class="post">
                <img src="{{$film->poster}}" alt="">
                <h2>{{$film->title}}</h2>
                <!-- <p> {{$film->description}} </p> -->
            </div>
    
</div>
@endsection