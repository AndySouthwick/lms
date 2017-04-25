@extends('layouts.front')

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

<!--Landing Page Content with scrolling text-->


		

	<div class="banner">
		
		<div class="container">
			
				
					
					<div id="typed-strings" class="agileits_strings">
						
                        <p>Master <i>Angular.JS</i></p>
						<p>or perhaps <i>Laravel</i></p>
						<p>maybe you want to brush up <br>on your <i>HTML & CSS</i></p>
                        <p>Whatever it is we have it <i>Here.</i></p>
					</div>
					<span id="typed" style="white-space:pre;"></span>
				
			
			
			
		</div>	
	</div>


    <script>
		// $(function(){

		// 	$("#typed").typed({
		// 		// strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
		// 		stringsElement: $('#typed-strings'),
		// 		typeSpeed: 30,
		// 		backDelay: 500,
		// 		loop: false,
		// 		contentType: 'html', // or text
		// 		// defaults to false for infinite loop
		// 		loopCount: false,
		// 		callback: function(){ foo(); },
		// 		resetCallback: function() { newTyped(); }
		// 	});

		// 	$(".reset").click(function(){
		// 		$("#typed").typed('reset');
		// 	});

		// });

		// function newTyped(){ /* A new typed object */ }

		// function foo(){ console.log("Callback"); }
		
    </script>

<!--Landing Page Content with scrolling text-->
@endsection

<!--footer-->

   
