@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <p>You are logged in.</p>

<form id="checkout-form" action="/subscriptions" method="POST">

<button id="customButton">Subscribe To View</button>
<input type="hidden" name="stripeToken"  id="stripeToken">
<input type="hidden" name="stripeEmail"  id="stripeEmail">

{{ csrf_field() }}

  
</form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://checkout.stripe.com/checkout.js"></script>
<script>
   let stripe = StripeCheckout.configure({
        key: "{{ config('services.stripe.key') }}",
        image: "https://stripe.com/img/documentation/checkout/marketplace.png",
        locale: "auto",
        panelLabel: "Subscribe For",
        token: function (token) {
            document.querySelector('#stripeEmail').value = token.email;
            document.querySelector('#stripeToken').value = token.id;
            document.querySelector('#checkout-form').submit();
           
        }
    });

    document.querySelector('#customButton').addEventListener('click', function(e){
          stripe.open({
              name: "My Courses",
              description: "Best courses to learn tech",
              zipCode: true,
              amount: 3500

          });
           e.preventDefault();
    });
 
  
</script>
@endsection
