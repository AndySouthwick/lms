@extends('layouts.app')

@section('title', 'Tech Teach')

<!--navigation-->
@section('nav')
    <p>This is my nav content.</p>
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
    <p>This is my course content.</p>
@endsection

<!--footer-->
@section('footer')
    <p>This is my footer content.</p>
@endsection