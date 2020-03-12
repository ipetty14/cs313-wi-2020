@extends('project1.viewOneTemplate')

@section('title', 'Create Team')

@section('content-title-section')
<h1>Create A Team</h1>
@endsection

@section('content-body')
    <form action="/project-1/teams" method="POST">
        @csrf

        <div class="container">
            <div class="row">
                <label class="font-weight-bold" for="teamName">Team Name</label>
            </div>
            <div class="row mb-3">
                <input type="text" name="teamName" value="">
            </div>
            <div class="row">
                <label class="font-weight-bold" for="teamLogo">Team Logo URL</label>
            </div>
            <div class="row mb-3">
                <input type="text" name="teamLogo" value="">
            </div>
            <div class="row">
                <label class="font-weight-bold" for="freeAgents[]">Free Agents</label>
            </div>
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
            <div class="row">
                <button type="submit" class="btn btn-dark">Save Info</button>
            </div>
        </div>
    </form>
@endsection
