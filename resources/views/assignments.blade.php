@extends('layouts.header')

@section('title', 'CS313 Assignments')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Assignments
        </div>

        <div class="links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('hello') }}">Hello World</a>
            <a href="{{ route('week02') }}">Week 2</a>
            <a href="{{ route('week03') }}">Week 3</a>
            <a href="{{ route('teams.index') }}">Project 1</a>
        </div>
    </div>
</div>
@endsection

