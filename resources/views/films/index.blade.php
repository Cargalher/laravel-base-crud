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
            <td><a href="{{route('films.show', ['film'=> $film->id])}}">View</a> | <a href="{{route('films.edit', ['film'=> $film->id])}}">Edit</a> | Delete</td>
        </tr>
        @endforeach
        
    </tbody>
</table>


<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#film-{{-4film->id}}">
  Delete
</button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                Body
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div> -->


@endsection