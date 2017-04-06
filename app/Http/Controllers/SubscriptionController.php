<?php

namespace App\Http\Controllers;

use Stripe\{Stripe, Charge, Customer};

class SubscriptionController extends Controller
{
    public function store()

    {
    	Stripe::setApiKey(config('services.stripe.secret'));

    	$customer = Customer::create([
    		'email' => request('stripeEmail'),
    		'source' => request('stripeToken')
    	]);  

    	Charge::create([
    		'customer' => $cusotmer->id,
    		'amount' => 2500,
    		'currency' => 'usd'
    	]);

    	return 'You are now a Member'
    }
}
