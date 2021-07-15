@extends('layout.app')

@section('title', 'Add a Film')

@section('content')

<div class="container">
  <h1>Add a new Film</h1>

  <!-- ADD VALUE TO THE TAGS INPUT!!! -->
  <form action="{{ route('films.update', $film->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Add title" aria-describedby="titleHelper" value= "{{$film->title}}">
        <small id="titleHelper" class="text-muted">Add Description here</small>
      </div>

      <div class="form-group">
        <label for="description">Content</label>
        <textarea class="form-control" name="description" id="description" rows="3">{{$film->description}}</textarea>
      </div>
      <div class="form-group">
        <h4>Current Image</h4>
        <img src="{{$film->poster}}}" alt="">
      </div>
      <div class="form-group">
        <label for="poster">Change Poster Image</label>
        <input type="url" name="poster" id="poster" class="form-control" placeholder="type an url" aria-describedby="posterHelper"value= "{{$film->poster}}">
        <small id="posterHelper" class="text-muted">Type the url for the Poster image</small>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection