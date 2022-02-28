@extends('layouts.app')

@section('title', 'Nba News - ' . $news->title)

@section('content')
<h2>{{$news->title}}</h2>

<h4>Author: {{$news->user->name}}</h4>
<hr />
<p>{{$news->content}}</p>
@endsection
