@extends('project1.viewAllTemplate')

@section('title', 'Teams')

@section('search-form')
<form class="form-inline my-2 my-lg-0" action="/project-1/teams">
    {{ csrf_field() }}
  <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search">
  <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
</form>
@endsection

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

