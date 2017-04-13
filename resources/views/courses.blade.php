@extends('layouts.app')

@section('title', 'Courses')
<!--navigation-->
@section('nav')
@endsection

<!--course listing-->
@section('content')
@foreach($courses as $course)
        <div class="col-lg-12">
        <a href="/videos/{{$course->course_id}}/" class="a">
       <div class="panel panel-default">
       <div class="panel-body">
             <div class="col-lg-12">
            <h4>{{$course->course_name}}</h4>
            </div>
             <div class="col-lg-3">
             By {{$course->by_who}}
             </div>
              <div class="col-lg-3">
              Level {{$course->level}}
             </div>
              <div class="col-lg-3">
              {{$course->course_length}}h
             </div>
              <div class="col-lg-3">
               {{$course->course_star_rating}}Stars
             </div>
            </div></div></a></div>
       @endforeach
@endsection

<!--footer-->

@section('footer')
    <p>This is my footer content.</p>
@endsection