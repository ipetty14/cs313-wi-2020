@extends('layouts.header')

@section('title', 'Week 02')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Week 2
        </div>

        <div class="links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('week02/ta02') }}">Team Activity 2</a>
        </div>
    </div>
</div>
@endsection
