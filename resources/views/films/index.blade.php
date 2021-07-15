@extends('layout.app')

@section('title', 'Films Page')

@section('content')

<a class="btn btn-primary fixed-bottom" href="{{route('films.create')}}" role="button">Create</a>
<table class="table container">

    <thead>
        <tr>
            <th>ID</th>
            <th>Poster</th>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($films as $film)
        <tr>
            <td scope="row">{{$film->id}}</td>
            <td><img src="{{$film->poster}}" alt=""></td>
            <td>{{$film->title}}</td>
            <td>{{$film->description}}</td>
            <td><a href="{{route('films.show', ['film'=> $film->id])}}">View</a> | Edit | Delete</td>
        </tr>
        @endforeach
        
    </tbody>
</table>



@endsection