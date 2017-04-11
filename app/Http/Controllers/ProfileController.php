<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
    public function update()
    {
        User::create([
           'name' => request('name'),
            'email' => request('email')
        ]);
    }
}
