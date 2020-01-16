@extends('layouts.header')

@section('title', 'CS313')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            CS 313
        </div>

        <div class="links">
            <a href="{{ url('hello') }}">Hello World</a>
            <a href="{{ route('week02') }}">Week 2</a>
            <a href="{{ route('week03') }}">Week 3</a>
            {{-- <a href="{{ route('week04') }}">Week 4</a>
            <a href="{{ route('week05') }}">Week 5</a>
            <a href="{{ route('week06') }}">Week 6</a>
            <a href="{{ route('week07') }}">Week 7</a>
            <a href="{{ route('team-activities') }}">Team Activities</a> --}}
        </div>
    </div>
</div>
@endsection

