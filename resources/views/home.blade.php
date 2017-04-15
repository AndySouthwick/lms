@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <p>You are logged in.</p>
               
                <checkout-form :plans="{{ $plans }}"></checkout-form>
            
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://checkout.stripe.com/checkout.js"></script>

@endsection
