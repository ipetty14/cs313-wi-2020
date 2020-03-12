@extends('project1.viewOneTemplate')

@section('title', 'View Player')

@section('content-title-section')
<h1>Update Player Information</h1>
@endsection

@section('content-body')

        <form action="/project-1/players/{{ $player->id }}" method="POST">
            @method('PUT')
            @csrf

            <div class="container">
                <div class="row">
                    <div class="container col-4">
                        <div class="row">
                            <label class="font-weight-bold" for="firstName">First Name</label>
                        </div>
                        <div class="row mb-3">
                            <input type="text" name="firstName" value="{{ $player->first_name }}">
                        </div>
                        <div class="row">
                            <label class="font-weight-bold" for="lastName">Last Name</label>
                        </div>
                        <div class="row mb-3">
                            <input type="text" name="lastName" value="{{ $player->last_name }}">
                        </div>
                        <div class="row">
                            <label class="font-weight-bold" for="height">Height (in inches)</label>
                        </div>
                        <div class="row mb-3">
                            <input type="number" name="height" value="{{ $player->height }}">
                        </div>
                        <div class="row">
                            <label class="font-weight-bold" for="weight">Weight (in lbs)</label>
                        </div>
                        <div class="row mb-3">
                            <input type="number" name="weight" value="{{ $player->weight }}">
                        </div>
                        <div class="row">
                            <label class="font-weight-bold" for="jerseyNumber">Jersey Number</label>
                        </div>
                        <div class="row mb-3">
                            <input type="number" name="jerseyNumber" value="{{ $player->jersey_number }}">
                        </div>
                        <div class="row">
                            <label class="font-weight-bold" for="playerPosition">Player Position</label>
                        </div>
                        <div class="row mb-3">
                            <input type="text" name="playerPosition" value="{{ $player->player_position }}">
                        </div>
                    </div>

                    <div class="container col-8">
                        @if ( $player->team->first() )
                            <h3 class="font-weight-bold">Team Information</h3>

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
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-dark">Save Info</button>
                </div>
            </div>
        </form>
@endsection
