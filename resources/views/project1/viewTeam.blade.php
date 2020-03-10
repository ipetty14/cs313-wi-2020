@extends('project1.viewOneTemplate')

@section('content-title-section')
<div class="row">
    <div class="col-3">
        <img src="{{ $team->team_logo }}">
    </div>
    <div class="col-9">
        <h1>{{ $team->team_name }}</h1>
    </div>
</div>
@endsection

@section('content-body')
<h2>Players</h2>

@if ( $team->players )
<table class="table table-hover">
    <thead>
        <th>Image</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Player Position</th>
    </thead>
    <tbody>
        @foreach ($team->players as $player)
            <tr>
                <td style="width: 30%"><a href="/project-1/players/{{ $player->id }}" ><img src="{{ $player->player_image }}"></a></td>
                <td style="width: 30%">{{ $player->first_name }}</td>
                <td style="width: 25%">{{ $player->last_name }}</td>
                <td style="width: 25%">{{ $player->player_position }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@else
    <p>No players on this team. Please add some from the free agency pool.</p>
    <a href="/project-1/players/create" class="btn btn-success text-white">Add Players</a>
@endif

@endsection
