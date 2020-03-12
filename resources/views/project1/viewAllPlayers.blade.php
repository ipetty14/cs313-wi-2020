@extends('project1.viewAllTemplate')

@section('title', 'Players')

@section('search-form')
<form class="form-inline my-2 my-lg-0" action="/project-1/players">
    {{ csrf_field() }}
  <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search">
  <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search mr-2"></i>Search</button>
</form>
@endsection

@section('content-title-section')
<div class="d-flex justify-content-between">
    <h1>View All Players</h1>
    <a href="/project-1/players/create" class="btn btn-primary fit-link">Create Player</a>
</div>
@endsection

@section('content-table')
<table class="table table-borderless table-hover">
    <tbody>
        @foreach ($players as $player)
            <tr>
                <td style="width: 15%"><a href="/project-1/players/{{ $player->id }}" ><img class="player-image" src="{{ $player->player_image }}"></a></td>
                <td><a href="/project-1/players/{{ $player->id }}" ><h3>{{ $player->first_name }} {{ $player->last_name }}</h3></a></td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $players->links() }}
@endsection


