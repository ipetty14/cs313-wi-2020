@extends('layouts.shoppingLayout')

@section('title', 'Checkout')

@section('content')
<div class="container products">
    <div class="row">
        <h1>Checkout</h1>
    </div>
    <hr>
    <div class="row">
        <h3>Enter personal information:</h3>
    </div>
    <form class="checkout-form">
        <div class="form-row">
            <input name="firstName" placeholder="First Name">
            <input name="lastName" placeholder="Last Name">
        </div>
        <div class="form-row">
            <input name="address-1" placeholder="Address 1">
            <input name="address-2" placeholder="Address 2">
        </div>
        <div class="form-row">
            <input name="city" placeholder="City">
            <input name="state" placeholder="State">
            <input name="zipCode" placeholder="Zip Code">
        </div>
    </form>
</div>
@endsection

