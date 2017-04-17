<?php

namespace App\Http\Requests;

use App\Plan;

use Illuminate\Foundation\Http\FormRequest;

class ResgistrationForm extends FormRequest{
    /**
     * Determine if the user is authorized to make this this->
     *
     * @return bool
     */
    public function authorize()
    {
     return !! $this->user();
    }

    /**
     * Get the validation rules that apply to the this->
     *
     * @return array
     */
    public function rules()
    {
        return [
            'stripeEmail' => 'required|email',
            'stripeToken' => 'required',
            'plan'        => 'required'
        ];  
    }
    public function save(){

        $plan = Plan::findOrFail($this->plan);
    	
		$this->user()
        ->subscription()
        ->create($plan, $this->stripeToken);
		

    	
 

		

		
		//update the user


    }
}
