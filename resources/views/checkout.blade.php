@extends('layouts.shoppingLayout')

@section('title', 'Checkout')

@section('content')
<div class="container products">
    <div class="row">
        <h1>Checkout</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-8">
            <div class="row">
                <h3>Enter personal information:</h3>
            </div>

            <form method="POST" action="{{ url('/week03/submit-order') }}" class="checkout-form">
                @csrf
                <div class="form-row">
                    <input id="first-name" name="firstName" placeholder="First Name">
                </div>
                <div class="form-row">
                    <input name="lastName" placeholder="Last Name">
                </div>
                <div class="form-row">
                    <input name="address-1" placeholder="Address 1">
                </div>
                <div class="form-row">
                    <input name="address-2" placeholder="Address 2">
                </div>
                <div class="form-row">
                    <input name="city" placeholder="City">
                </div>
                <div class="form-row">
                    <input name="state" placeholder="State">
                </div>
                <div class="form-row">
                    <input name="zipCode" placeholder="Zip Code">
                </div>

                <div class="form-row">
                    <button class="btn btn-info" type="submit">Submit Order</button>
                </div>
            </form>
        </div>
        @if(session('cart'))
        <?php $total = 0 ?>
        <div class="col-4">
            <div class="row">
                <h3>Cart Details:</h3>
            </div>

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
        </div>
        @endif
    </div>
</div>
@endsection

