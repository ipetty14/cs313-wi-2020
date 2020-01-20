@extends('layouts.header')

@section('title', 'CS313')

@section('content')
<div class="flex position-ref header">
    <div class="title-content">
        <div class="title m-b-md m-l-md">
            CS 313
        </div>
    </div>
    <div class="menu-content top-rights">
        <div class="links">
            <a href="{{ url('assignments') }}">Assignments</a>
        </div>
    </div>
</div>

<div class="flex position-ref">
    <div class="content">
        <div class="hover-shine ">
            <figure><a id="pop_up" href="{{ secure_asset('assets/images/Prague.jpeg') }}"><img src="{{ secure_asset('assets/images/Prague.jpeg') }}" /></a></figure>
        </div>
    </div>
    <div class="content">
        <h2>Welcome to my CS313 Homepage</h2>
        <p>I lived in the Czech Republic for two years and it is a magical place. I want to share that through this picture of Prague at Christmas time.</p>
        <p>The assignments can be found in the menu above.</p>
    </div>
</div>
@endsection
