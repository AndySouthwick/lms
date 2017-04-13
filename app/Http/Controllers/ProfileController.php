<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     */
    public function index()
    {
        return view('profile');
    }

    /**
     * Edit user data.
     */
    public function update(Request $request)
    {
        $input = $request->only('name','email','password', 'pass_confirm');
        $user = Auth::user();
        $user->name = $input['name'];
        $user->email = $input['email'];
        if ($input['password'] != "") {
            if ($input['password'] == $input['pass_confirm']) {
                $user->password = Hash::make($input['password']);
            }
        }


        // Save changes
        $user->save();

        return back();
    }
}
