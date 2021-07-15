@extends('layout.app')

@section('title', 'Add a Film')

@section('content')

<div class="container">
<h1>Add a new Film</h1>


<form action="" method="post">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Add title" aria-describedby="title">
      <small id="titleHelper" class="text-muted">Add Description here</small>
    </div>
</form>
<div class="form-group">
  <label for="description">Content</label>
  <textarea class="form-control" name="description" id="description" rows="3"></textarea>
</div>
<div class="form-group">
  <label for="poster">Poster Image URL</label>
  <input type="url" name="poster" id="poster" class="form-control" placeholder="type an url" aria-describedby="posterHelpId">
  <small id="coverHelper" class="text-muted">Type the url for the Poster image</small>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</div>

@endsection