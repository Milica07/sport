@extends('layouts.app')

@section('title', 'Nba News - ' . $news->title)

@section('content')
<h2>{{$news->title}}</h2>

<h4>Author: {{$news->user->name}}</h4>
<hr />
<p>{{$news->content}}</p>
<hr />
<h3>Teams</h3>
@foreach ($news->teams as $team)
  <div><a href="{{route('newsForTeam', ['teamName'=>$team->name])}}">{{$team->name}}</a><div
@endforeach
@endsection
