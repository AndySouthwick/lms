<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebhooksController extends Controller
{

	die(var_dump(request()->()))
    // public function handle()
    // {
    // 	if ($payload['type']  == 'customer.subscription.deleted') {

    // 		$user = App\User::where('stripe_id' , $payload['data']['object']['customer'])->firstOrFail();

    // 		$user->deactivate();

    // 		return response('Webhook Received');
    	}
    }
}
