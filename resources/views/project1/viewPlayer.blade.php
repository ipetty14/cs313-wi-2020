@extends('project1.viewOneTemplate')

@section('title', 'View Player')

@section('content-title-section')
<div class="row">
    <div class="col-3 d-flex justify-content-center">
        <img src="{{ $player->player_image }}">
    </div>
    <div class="col-9 d-flex align-items-center">
        <h1 class="display-4">{{ $player->first_name }} {{ $player->last_name }}</h1>
    </div>
</div>
@endsection

@section('content-body')
<div class="container">
    <div class="row justify-content-around">
        <div class="col-4 pl-0">
            <h2>Player Information</h2>
        </div>
        <div class="col-8 pr-0 d-flex justify-content-end">
            <a href="/project-1/players/{{ $player->id }}/edit" class="btn btn-primary text-white float-right fit-link mr-2">Edit Player Information</a>
            <form method="POST" action{{ route( 'players.destroy', [ $player->id ] ) }}>
                {{ csrf_field() }}
                {{ method_field( 'DELETE' ) }}
                <button class="btn btn-danger text-white float-right fit-link" type="submit"><i class="fas fa-trash-alt mr-2"></i>Delete</button>
            </form>
        </div>
    </div>
</div>

<table class="table table-hover mb-5">
    <thead>
        <th>Height</th>
        <th>Weight</th>
        <th>Jersey Number</th>
        <th>Player Position</th>
    </thead>
    <tbody>
        <tr>
            <td>{{ floor( $player->height / 12 ) }}' {{ $player->height % 12 }}"</td>
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
                <td style="width: 33%"><a href="/project-1/teams/{{ $player->team->first()->id }}"><img src="{{ $player->team->first()->team_logo }}"></a></td>
                <td class="team-name"><a href="/project-1/teams/{{ $player->team->first()->id }}">{{ $player->team->first()->team_name }}</a></td>
            </tr>
        </tbody>
    </table>
@else
    <h3>Free Agent</h3>
    <p>This player is currently a free agent. Please go to the teams page and assign them to a team.</p>
    <a href="/project-1/teams" class="btn btn-success text-white">View Teams</a>
@endif

@endsection
