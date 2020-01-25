@extends('layouts.shoppingLayout')

@section('title', 'Confirmation')

@section('content')

<div class="container products">

    <div class="row">

        <h1>Success! Your order has been submitted</h1>

    </div>

    <?php $total = 0 ?>

    <br>

    <div class="row">
        <div class="col-8">
            <div class="row">
                <h3>Product Information</h3>
            </div>
            <hr>

            @if(session('cart'))
                @foreach(session('cart') as $id => $details)

                <?php $total += $details['price'] * $details['quantity'] ?>

                <div class="row">
                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                </div>
                <div class="row">
                    <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                </div>
                <p class="text-right">Quantity: {{  $details['quantity'] }}</p>
                <p class="text-right">Subtotal: ${{ $details['price'] * $details['quantity'] }}</p>

                @endforeach
            @endif
            <hr>
            <p class="text-right">Total: {{$total}}</p>
        </div>

        <div class="col-4">
            <div class="row">
                <h3>Checkout Information</h3>
            </div>

            <hr>

            @if(session('checkout_information'))
                @foreach(session('checkout_information') as $id => $details)

                <div class="row ml-0">
                    <?php
                    $display_string = ucwords(str_replace('_', ' ', $id));
                    ?>

                    <p>{{$display_string}}: {{ $details }}</p>
                </div>

                @endforeach
            @endif
        </div>
    </div>

</div>

@endsection
