@extends('layouts.app')

@section('title', 'Nba News')


@section('content')
<h2>News</h2>
<div>
  @foreach ($allNews as $news)
    <div>
      <a href="{{ route('news', ['news' => $news->id]) }}">{{$news->title}}, {{$news->user->name}}</a>
    </div>
  @endforeach
  <br/>
  {{$allNews->links()}}
</div>
<style>
    svg{
        width: 20px;
    }
</style>
@endsection
