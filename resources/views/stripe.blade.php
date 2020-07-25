@extends('layouts.app')

@section('content')
    <div class="container">
<div class="links" style="margin-top:20px">
    <script src="https://js.stripe.com/v3/"></script>
    <form action="{{route('stripe.store')}}" method="post" id="payment-form">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label for="card-element">Credit card or debit card</label>
            <div id="card-element" style="width: 100%;">
                <!-- A Stripe Element will be inserted here. -->
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>

        <button id="st-btn" style="margin-top: 30px;">Send Payment</button>
    </form>
</div>
    </div>
@endsection
