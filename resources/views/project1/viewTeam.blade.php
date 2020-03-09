@extends('project1.viewOneTemplate')

@section('content-title-info')
<h2>{{ $team->team_name }}</h2>
@endsection

@section('content-body')
<h2>Players</h2>
@forelse ($team->players as $player)
    <p>{{ $player->first_name }} {{ $player->last_name }}</p>
@empty
    <p>No players on this team. Please add some from the free agency pool.</p>
    <a href="" class="btn btn-success text-white" onclick="">Add Players</a>
@endforelse
@endsection

