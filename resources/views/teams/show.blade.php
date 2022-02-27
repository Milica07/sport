@extends('layouts.app')

@section('title', $team->name)

@section('content')
<h2>{{$team->name}}</h2>

<div>Email: {{$team->email}}</div>
<div>Address: {{$team->address}}</div>
<div>City: {{$team->city}}</div> <br/>

<h5>Players</h5>
<ul>
  @forelse($team->players as $player)
    <li>
      <a href="/players/{{ $player->id }}">{{$player->first_name}} {{$player->last_name}}</a>
    </li>
  @empty
    <span>No players</span>
  @endforelse
</ul>
<br/>
<h5>Comments</h5>
<ul>
  @forelse($team->comments as $comment)
    <li>{{$comment->content}}</li>
  @empty
    <span>No comments</span>
  @endforelse
</ul>
<form action="{{route('createComment', ['team' => $team])}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="content">Add comment:</label>
    <textarea
      class="form-control @error('content') is-invalid @enderror"
      id="content"
      rows="2"
      name="content"
    ></textarea>
    @error('content')
      <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
