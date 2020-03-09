@extends('project1.viewAllTemplate')

@section('title', 'Teams')

@section('content-title-section')
<h1>View All Teams</h1>
@endsection

@section('content-table')
<table class="table table-borderless table-hover">
    <tbody>
        @foreach ($teams as $team)
            <tr>
                <td style="width: 15%"><a href="/project-1/teams/{{ $team->id }}" ><img src="{{ $team->team_logo }}"></a></td>
                <td><a href="/project-1/teams/{{ $team->id }}" ><h2>{{ $team->team_name }}</h2></a></td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $teams->links() }}
@endsection

