@extends('project1.viewAllTemplate')

@section('content-title-section')
<h1>View All Players</h1>
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


