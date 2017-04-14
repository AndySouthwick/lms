<?php

namespace App\Http\Controllers;

use App\Subscription;

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

    	return view('subscriptions')->string('You are now a Member');
    }
}
