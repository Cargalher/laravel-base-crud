@extends('layout.app')

@section('title', 'Films Page')

@section('content')
<div class="container">
        
            <div class="post">
                <h2>{{$film->title}}</h2>
                <img src="{{$film->poster}}" alt="">
                <p> {{$film->description}} </p>
            </div>
    
</div>
@endsection