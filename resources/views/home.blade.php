@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <p>You are logged in.</p>

<form action="/subscriptions" method="POST">
    {{ csrf_field() }}

  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="{{ config('services.stripe.key') }}"
    data-amount="2500"
    data-name="Account Subscription"
    data-description="Subscription to Crack Online"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto">
  </script>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
