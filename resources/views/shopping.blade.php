@extends('layouts.shoppingLayout')

@section('title', 'Products')

@section('content')

    <div class="container products">

        <div class="row">

            @foreach($products as $product)
                <div class="col-xs-18 col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{ $product->photo }}" width="500" height="300">
                        <div class="caption">
                            <h3>{{ $product->name }}</h3>
                            <p>{{ $product->description }}</p>
                            <p><strong>Price: </strong> ${{ $product->price }}</p>
                            <p class="btn-holder"><a href="{{ url('/week03/add-to-cart/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>

@endsection
