@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
              <form action="/your-server-side-code" method="POST">

  <script src="https://checkout.stripe.com/checkout.js" 
  class="stripe-button" 
  data-key="pk_test_QZQQf17KexkXTErv6bKPeAP9" 
  data-amount="999" data-name="stripe.com" 
  data-description="Widget" 
  data-image="https://stripe.com/img/documentation/checkout/marketplace.png" 
  data-locale="auto" 
  data-notrack="">
  </script>
  
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
