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
<div class="row">
    <div class="col-lg-4"> 
         <h1 class="textbg">Welcome To King of Tuts</h1>
    </div>
    <div class="col-lg-4 col-md-offset-4" > 
        <h1 class="textbg">Find Your Zen</h1>
    </div>
</div>
<div class="spacer">
    <div class="col-md-4 col-md-offset-4 text-center " > 
        <img src="images/play.png ">
    </div>
</div>

{{-- <div class="container-fluid">
  </div>
  



<div class="row pushdown">
<div class="col-lg-4"> </div>
    <div class="col-lg-4"> 
        <img alt="Responsive across devices" src="http://forum.clanspeak.ro/uploads/videos/thumbnails/thumb_35.png" class="img-responsive"> 
    </div>
    <div class="col-lg-4"> </div>
</div>
<div class="row">
        {{-- <div class="bgcolordrkgrey"><h3>One framework, every device.</h3>
            <p>Bootstrap easily and efficiently scales your websites and applications with a single code base, from phones to tablets to desktops with CSS media queries.</p> 
        </div> --}}
</div>
@endsection

<!--footer-->

   
