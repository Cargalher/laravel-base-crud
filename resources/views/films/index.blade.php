@extends('layout.app')

@section('title', 'Films Page')

@section('content')


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
            <td>View | Edit | Delete</td>
        </tr>
        @endforeach
        
    </tbody>
</table>



@endsection