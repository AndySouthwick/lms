@extends('layouts.app')

@section('title', 'Tech Teach')

<!--navigation-->
@section('nav')
     @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
@endsection

<!--course listing-->
@section('content')
    <div class="jumbotron">
    <p>Welcome To Tech---</p>
    </div>
@endsection

<!--footer-->

   
