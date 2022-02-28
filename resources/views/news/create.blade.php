@extends('layouts.app')

@section('title', 'Publish article')

@section('content')
<form action="/news" method="POST">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input
      type="text"
      class="form-control @error('title') is-invalid @enderror"
      id="title"
      aria-describedby="titleHelp"
      placeholder="Enter title"
      name="title">
    @error('title')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="content">Content</label>
    <textarea
      class="form-control @error('content') is-invalid @enderror"
      id="content"
      rows="5"
      name="content"
    ></textarea>
    @error('content')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <div>
    <label>Select teams:</label>
    @foreach($teams as $team)
      <div class="form-check">
        <input
          type="checkbox"
          class="form-check-input"
          id="team-{{$team->id}}"
          autocomplete="off"
          name="teams[]"
          value="{{$team->id}}"
        >
        <label  class="form-check-label" for="team-{{$team->id}}">{{$team->name}}</label>
      </div>
    @endforeach
    @error('teams')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
