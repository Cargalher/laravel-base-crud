@extends('layout.app')

@section('title', 'Films Page')

@section('content')
<h1 class="display-1">{{$film->title}}</h1>
<div class="container">
        
            <div class="post">
                
                <img src="{{$film->poster}}" alt="">
                <p class="lead"> {{$film->description}} </p>
            </div>
    
</div>

<form action="{{route('films.delete', $film->id)}}" method="post" class="delete">
@csrf
@method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>

</form>

@endsection