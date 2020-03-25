@extends('project1.viewOneTemplate')

@section('content-title-section')
<div class="row">
    <div class="col-3 d-flex justify-content-center">
        <img src="{{ $team->team_logo }}">
    </div>
    <div class="col-9 d-flex align-items-center">
        <h1 class="display-4">{{ $team->team_name }}</h1>
    </div>
</div>
@endsection

@section('content-body')
<div class="container">
    <div class="row justify-content-around">
        <div class="col-4 pl-0">
            <h2>Players</h2>
        </div>
        <div class="col-8 pr-0 d-flex justify-content-end">
            <a href="/project-1/teams/{{ $team->id }}/edit" class="btn btn-primary text-white float-right fit-link mr-2">Edit Team Information</a>
            <form method="POST" action{{ route( 'teams.destroy', [ $team->id ] ) }}>
                {{ csrf_field() }}
                {{ method_field( 'DELETE' ) }}
                <button class="btn btn-danger text-white float-right fit-link" type="submit"><i class="fas fa-trash-alt mr-2"></i>Delete</button>
            </form>
        </div>
    </div>
</div>

@if ( $team->players )
<table class="table table-hover">
    <thead>
        <th>Image</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Position</th>
        <th>Remove</th>
    </thead>
    <tbody>
        @foreach ($team->players as $player)
            <tr>
                <td style="width: 30%"><a href="/project-1/players/{{ $player->id }}" ><img src="{{ $player->player_image }}"></a></td>
                <td style="width: 25%">{{ $player->first_name }}</td>
                <td style="width: 25%">{{ $player->last_name }}</td>
                <td style="width: 10%">{{ $player->player_position }}</td>
                <td style="width: 10%"><form method="POST" action{{ route( 'teams.update', [ $team->id ] ) }}>
                    @csrf
                    @method( 'PUT' )
                    <input type="hidden" name="playerIdToRemove" value="{{ $player->id }}">
                    <button class="btn btn-outline-danger text-red float-right fit-link" type="submit"><i class="fas fa-trash-alt"></i></button>
                </form></td>
            </tr>
        @endforeach
    </tbody>
</table>
@else
    <p>No players on this team. Please add some from the free agency pool.</p>
    <a href="/project-1/players/create" class="btn btn-success text-white">Add Players</a>
@endif

@endsection
