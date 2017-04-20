<?php

namespace App\Http\Controllers;
use Exception;
use App\Http\Requests\ResgistrationForm;

class SubscriptionController extends Controller
{
    public function store(ResgistrationForm $form)

    {
		try{
			$form->save();
		} catch (Exception $e){
			return response()->json(['status' => $e->getMessage()], 422);

		}

    	return [
			'status' => 'Success!'
		];
    }
}
