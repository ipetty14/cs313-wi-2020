@extends('project1.viewOneTemplate')

@section('title', 'Create Player')

@section('content-title-section')

<h1>Create New Player</h1>

@endsection

@section('content-body')

    <form action="/project-1/players" method="POST">
        @csrf

        <div class="container">
            <div class="row">
                <label class="font-weight-bold" for="firstName">First Name</label>
            </div>
            <div class="row mb-3">
                <input type="text" name="firstName" value="">
            </div>
            <div class="row">
                <label class="font-weight-bold" for="lastName">Last Name</label>
            </div>
            <div class="row mb-3">
                <input type="text" name="lastName" value="">
            </div>
            <div class="row">
                <label class="font-weight-bold" for="height">Height (in inches)</label>
            </div>
            <div class="row mb-3">
                <input type="number" name="height" value="">
            </div>
            <div class="row">
                <label class="font-weight-bold" for="weight">Weight (in lbs)</label>
            </div>
            <div class="row mb-3">
                <input type="number" name="weight" value="">
            </div>
            <div class="row">
                <label class="font-weight-bold" for="jerseyNumber">Jersey Number</label>
            </div>
            <div class="row mb-3">
                <input type="number" name="jerseyNumber" value="">
            </div>
            <div class="row">
                <label class="font-weight-bold" for="playerPosition">Player Position</label>
            </div>
            <div class="row mb-3">
                <input type="text" name="playerPosition" value="">
            </div>
            <div class="row">
                <label class="font-weight-bold" for="playerImage">Player Image URL</label>
            </div>
            <div class="row mb-3">
                <input type="text" name="playerImage" value="">
            </div>
            <div class="row">
                <button type="submit" class="btn btn-dark">Save Info</button>
            </div>
        </div>
    </form>

@endsection
