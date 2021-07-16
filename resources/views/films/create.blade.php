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


  <h1>Add a new Film</h1>


  <form action="{{ route('films.store' )}}" method="POST">
    @csrf

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Add title" aria-describedby="titleHelper" value="{{old('title')}}" required>
      <small id="titleHelper" class="text-muted">Add Description here</small>
    </div>
    @error('title')
    <div class="alert alert-danger">{{$message}} </div>
    @enderror

    <div class="form-group">
      <label for="description">Content</label>
      <textarea class="form-control  @error('description') is-invalid @enderror" name="description" id="description" rows="3"> {{old('title')}} </textarea>
    </div>
    @error('description')
    <div class="alert alert-danger">{{$message}} </div>
    @enderror
    <div class="form-group">
      <label for="poster">Poster Image URL</label>
      <input type="url" name="poster" id="poster" class="form-control" placeholder="type an url" aria-describedby="posterHelper" value="{{old('image')}}" required>
      <small id="posterHelper" class="text-muted  @error('poster') is-invalid @enderror">Type the url for the Poster image</small>
    </div>
    @error('poster')
    <div class="alert alert-danger">{{$message}} </div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
</div>
@endsection