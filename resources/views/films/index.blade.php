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
            <td>
                <a href="{{route('films.show', ['film'=> $film->id])}}" style="font-size: 14px; color:white;">View <i class="fas fa-film"></i></a>
                <a href="{{route('films.edit', ['film'=> $film->id])}}" style="font-size: 14px; color:white;">Edit <i class="far fa-edit"></i></a>
                <a href="{{route('films.delete', ['film'=> $film->id])}}" style="font-size: 14px; color:white;">Delete <i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>





@endsection