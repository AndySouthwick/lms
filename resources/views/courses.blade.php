@extends('layouts.app')

@section('title', 'Courses')
<!--navigation-->
@section('nav')
@endsection

<!--course listing-->
@section('content')
       @foreach ($courses as $course)
            {{$course->course_name}}
       @endforeach
@endsection

<!--footer-->

@section('footer')
    <p>This is my footer content.</p>
@endsection