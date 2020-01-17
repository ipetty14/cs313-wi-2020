@extends('layouts.header')

@section('title', 'Team Assignment 02')

@section('content')
    <div class="container">
        <div class="row">
            <div id="div-1" class="col-4">Square 1</div>
            <div id="div-2" class="col-4">Square 2</div>
            <div id="div-3" class="col-4">Square 3</div>
        </div>
        <div class="row mb-3">
            <div class="col-8">
                <label id="ta02-input-color-label" for="ta02-input-color">Insert a color or hex value: </label>
            </div>
            <button id="ta02-button-1">Change Color</button>
        </div>
        <div class="row">
            <div class="col-8">
                <input id="ta02-input-color" placeholder="#000000">
            </div>
            <button id="ta02-button-2">Hide Square 3</button>
        </div>
    </div>
@endsection

@push('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ secure_asset('css/ta02.css') }}">
@endpush

@push('scripts')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ secure_asset('js/ta02.js')}}"></script>
@endpush
