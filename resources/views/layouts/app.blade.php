<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
    @yield('title')
    </title>

     <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
   

    var lms ={
        csfrToken: "{{csrf_token()}}",
        stripeKey: "{{ config('services.stripe.key') }}",
         
    }
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            'stripeKey' => config('services.stripe.key')
        ]) !!};

       
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                       @if (Auth::guest()) <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Techit') }}
                    </a>
                    @else <a class="navbar-brand" href="{{ url('/profile') }}">
                        {{ config('app.name', 'Techit') }}
                    </a>
                    @endif
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="{{ url('/tracks') }}">Tracks</a></li>
                            <li><a href="{{ url('/profile') }}">Profile</a></li>
                           
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
        @yield('content')
        </div>
    </div>

<!--Footer-->
  <div class="footer">
		<div class="container">
			
			<div class="agile_footer_copy">
				<div class="footer_grids">
					
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="copy_right_social">
				<div class="col-md-6 copy_right">
					<p>&copy; 2017. All rights reserved | <a href="#">Adrien, Andy, Chad & Tyson Dev & Design</a></p>
				</div>
				<div class="col-md-6 agile_copy_right">
					<ul class="agileinfo_social_icons">
						<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!--Footer-->
        

    <!-- Scripts -->    <script src="{{ asset('js/app.js') }}"></script>

    
</body>
</html>
