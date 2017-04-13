<?php

namespace App\Http\Controllers;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideosController extends Controller
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
    public function index($course_id )
    {   
        
        $courses = DB::table('courses')->where('id', '=', $course_id)->get();
        $videos = DB::table('videos')->where('course_id', '=', $course_id)->get();
        return view('videos')->with('videos', $videos)->with('courses', $courses);     
    }
    public function video($course_id, $id){
        $courses = DB::table('courses')->where('id', '=', $course_id)->get();
        $selecte_videos = DB::table('videos')->where('id', '=', $id)->get();
        $videos = DB::table('videos')->where('course_id', '=', $course_id)->get();
        $video = DB::table('videos')->where('id', '=', $id)->get();
        return view('videos')->with('videos', $videos)
        ->with('selected_videos', $selecte_videos)
        ->with('courses', $courses);
    }
}
