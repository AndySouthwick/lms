<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Track;
use Illuminate\Http\Request;

class TracksController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
       $tracks = Track::all();
       return view('tracks')
       ->with('tracks', $tracks); 
    }
}
