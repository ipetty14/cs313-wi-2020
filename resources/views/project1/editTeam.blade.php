@extends('project1.viewOneTemplate')

@section('title', 'Edit Team')

@section('content-title-section')
<h1>Edit Team</h1>
@endsection

@section('content-body')
    <form action="/project-1/teams/{{ $team->id }}" method="POST">
        @csrf
        @method( 'PUT' )

        <div class="container">
            <div class="row">
                <label class="font-weight-bold" for="teamName">Team Name</label>
            </div>
            <div class="row mb-3">
                <input type="text" name="teamName" value="{{ $team->team_name }}">
            </div>
            <div class="row">
                <label class="font-weight-bold" for="teamLogo">Team Logo URL</label>
            </div>
            <div class="row mb-3">
                <input type="text" name="teamLogo" value="{{ $team->team_logo }}">
            </div>

            <div class="row">
                <label class="font-weight-bold" for="freeAgents[]">Free Agents</label>
            </div>
            @if ( count( $free_agents ) > 0 )
                @foreach( $free_agents as $free_agent )
                <div class="row mb-3">
                    <div class="col-4 row">
                        <div class="col-1 pr-0">
                            <input type="checkbox" name="freeAgents[]" value="{{ $free_agent->id }}">
                        </div>
                        <div class="col-11">
                            <p>{{ $free_agent->first_name }} {{ $free_agent->last_name }}</p>
                        </div>
                    </div>
                    <div class="col-3">
                        <img src="{{ $free_agent->player_image }}" style="width: 150px;">
                    </div>
                </div>
                @endforeach
            @else
            <div class="row">
                <p>No free agents currently exist. Please create a new player to assign to this team.</p>
            </div>
            <div class="row mb-3">
                <a href="project-1/players/create" class="btn btn-success text-white">Create Player</a>
            </div>
            @endif
            <div class="row">
                <button type="submit" class="btn btn-dark">Save Info</button>
            </div>
        </div>
    </form>
@endsection
