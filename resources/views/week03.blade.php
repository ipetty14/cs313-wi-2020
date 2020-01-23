@extends('layouts.header')

@section('title', 'Week 03')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title center m-b-md">
            Week 3
        </div>

        <div class="links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('week03/wa03') }}">Weekly Activity 3</a>
        </div>
    </div>
</div>
@endsection
