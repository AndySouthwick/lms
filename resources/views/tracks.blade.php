@extends('layouts.app')

@section('title', 'Tracks')

@section('content')
    @foreach ($tracks as $track)
    <div class="col-lg-6">
    <div class="panel panel-default">
    <a href="#" class="a">
         <div class="panel-body">
         
          <div class="col-lg-3"><img src="{{$track->track_image_location}}" width="100"/></div>
       <div class="col-lg-9"><h2>{{$track->track_name}}</h2></div>
            
           <div class="col-lg-2"> {{$track->number_of_courses}}Courses</div>
           <div class="col-lg-2"> {{$track->courses_hours}}Hours </div>
           
          </div>
    </a>
    </div>
    </div>

    @endforeach
@endsection