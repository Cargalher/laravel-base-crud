@extends('layout.app')

@section('title', 'Add a Film')

@section('content')

<div class="container">
@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li> {{$error}} </li>
      @endforeach
    </ul>
  </div>
  @endif

  <h1>Edit Film</h1>

  <!-- ADD VALUE TO THE TAGS INPUT!!! -->
  <form action="{{ route('films.update', $film->id)}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control  @error('title') is-invalid @enderror" placeholder="Add title" aria-describedby="titleHelper" value= "{{$film->title}}" required>
        <small id="titleHelper" class="text-muted">Add Description here</small>
      </div>
      @error('title')
        <div class="alert alert-danger">{{$message}} </div>
      @enderror

      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control  @error('title') is-invalid @enderror" name="description" id="description" rows="3">{{$film->description}}</textarea>
      </div>
      @error('description')
        <div class="alert alert-danger">{{$message}} </div>
      @enderror

      <div class="form-group">
        <h6>Current Image</h6>
        <img src="{{$film->poster}}" alt="">
      </div>
      <div class="form-group">
        <label for="poster">Change Poster Image</label>
        <input type="url" name="poster" id="poster" class="form-control  @error('title') is-invalid @enderror" placeholder="type an url" aria-describedby="posterHelper"value= "{{$film->poster}}"require>
        <small id="posterHelper" class="text-muted">Type the url for the Poster image</small>
      </div>
      @error('poster')
    <div class="alert alert-danger">{{$message}} </div>
    @enderror

      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection