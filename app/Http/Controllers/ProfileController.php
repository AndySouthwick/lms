<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

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
        $input = $request->only('name','email');

        $user = Auth::user(); // Fetch the user model

        // Update the fields
        $user->name = $input['name'];
        $user->email = $input['email'];

        // Save changes
        $user->save();

        return back();
    }
}
