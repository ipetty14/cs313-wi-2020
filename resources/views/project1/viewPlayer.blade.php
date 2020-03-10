@extends('project1.viewOneTemplate')

@section('title', 'View Player')

@section('content-title-section')
<div class="row">
    <div class="col-3">
        <img src="{{ $player->player_image }}">
    </div>
    <div class="col-9">
        <h1>{{ $player->first_name }} {{ $player->last_name }}</h1>
    </div>
</div>
@endsection

@section('content-body')
<h2>Player Information</h2>

<table class="table table-hover mb-5">
    <thead>
        <th>Height</th>
        <th>Weight</th>
        <th>Jersey Number</th>
        <th>Player Position</th>
    </thead>
    <tbody>
        <tr>
            <td>{{ $player->height }}</td>
            <td>{{ $player->weight }}</td>
            <td>{{ $player->jersey_number }}</td>
            <td>{{ $player->player_position }}</td>
        </tr>
    </tbody>
</table>

@if ( $player->team->first() )
    <h3>Team Information</h3>

    <table class="table table-hover">
        <tbody>
            <tr>
                <td style="width: 33%"><img src="{{ $player->team->first()->team_logo }}"></td>
                <td class="team-name">{{ $player->team->first()->team_name }}</td>
            </tr>
        </tbody>
    </table>
@else
    <h3>Free Agent</h3>
    <p>This player is currently a free agent. Please go to the teams page and assign them to a team.</p>
    <a href="/project-1/teams" class="btn btn-success text-white">View Teams</a>
@endif

@endsection
