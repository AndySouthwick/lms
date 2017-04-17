<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationsForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       return $this->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'stripeEmail' => 'required|email',
          'stripeToken' => 'required',
          'plan' => 'required'
        ];
    }
    public function save(){
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
    }
}
