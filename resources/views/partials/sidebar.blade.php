<div>
    <h4>Teams with news</h4>
    <div>
      @foreach ($teamsWithNews as $team)
        <div>
          <a href="{{route('newsForTeam', ['teamName' => $team->name])}}">
            {{$team->name}}
          </a>
        </div>
      @endforeach
    </div>
</div>
