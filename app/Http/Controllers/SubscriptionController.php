<?php

namespace App\Http\Controllers;
use Stripe\Customer;
use App\Plan;
use App\Subscription;
use App\User;

class SubscriptionController extends Controller
{
    public function store()

    {
		$plan = Plan::findOrFail(request('plan'));
    	
		//dd(request()->all());
		try{
    	$customer = Customer::create([
    		'email' => request('stripeEmail'),
    		'source' => request('stripeToken'),
			'plan' => $plan->name
    	]);  

		

		} catch (\Exception $e) {
			return response()->json(['status' => $e->getMessage()], 422);
		}
		//update the user


request()->user()->activate($customer->id);

    	return [
			'status' => 'Success!'
		];
    }
}
