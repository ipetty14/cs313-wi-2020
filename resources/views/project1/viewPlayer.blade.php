@extends('project1.viewOneTemplate')


@section('content-title-section')
<h2>{{ $player->first_name }} {{ $player->last_name }}</h2>
@endsection

@section('content-body')
<h3>Player Info</h3>
<p>{{ $player->height }}</p>
<p>{{ $player->weight }}</p>
<p>{{ $player->jersey_number }}</p>
<p>{{ $player->player_position }}</p>

<h3>Team Info</h3>
<p>{{ $player->team->first() }}</p>
@endsection
