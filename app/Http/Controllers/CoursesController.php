<?php

namespace App\Http\Controllers;
use App\Course;
use App\Course_Track;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
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
    public function index($id)
    {
        $courses = DB::table('courses_tracks')
        ->join('courses', 'courses.id', '=', 'courses_tracks.course_id')
        ->join('tracks', 'tracks.id', '=', 'courses_tracks.track_id')
        ->where('courses_tracks.track_id', '=', $id)->get();
       
        return view('courses')->with('courses', $courses);

        
    }
}
