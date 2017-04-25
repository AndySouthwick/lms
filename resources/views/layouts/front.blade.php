<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://use.fontawesome.com/a509435f86.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
    @yield('title')
    </title>


     
     <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600" rel="stylesheet">
    
    <!--Font Awesome-->
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
    <style>
body, html {
   height: 100%;
}

.bg{
   /* The image used */
   background-image: 'images/banner.jpg';

   /* Full height */
   height: 100%;

   /* Center and scale the image nicely */
   background-position: center;
   background-repeat: no-repeat;
   background-size: cover;
}

 </style>
</head>
<body>
    <div class="bg">
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
<style>
    /*-- footer --*/
.footer{
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-attachment: fixed;
	padding:4em 0;
}
.footer h2{
	font-size: 1.5em;
    color: #ffffff;
    font-weight: 300;
    margin-bottom: 1em;
}
.footer h2 span{
	display:block;
	text-transform:uppercase;
	font-weight:600;
	color:#0accff;
	font-size: 1.5em;
}
.footer input[type="email"]{
	outline: none;
    color: #fff;
    padding: 10px;
    font-size: 1.5em;
    width: 82%;
    background: none;
    border: none;
    border-bottom: 1px solid #999;
}
.footer input[type="submit"]{
	outline: none;
    color: #fff;
    padding: 10px 0;
    font-size: 1.5em;
    width: 15%;
    background:#ec9114;
    border: none;
    text-transform: uppercase;
    margin-left: 1em;
}
.footer input[type="submit"]:hover{
	background:#0accff;
}
.agile_footer_copy{
	padding:3em 0;
	border-bottom:1px solid rgb(36, 34, 142);
}
.footer_grid h3{
	font-size: 1.5em;
    color:#ffffff;
    margin: 0 0 1.5em;
}
.footer_grid p{
	font-size:14px;
	color:#bfbfbf;
	line-height:2em;
	margin:0;
}
.footer_grid p span{
	display:block;
	margin:1em 0 0;
}
.footer_grid ul li{
	list-style-type:none;
	color:#bfbfbf;
	font-size:14px;
}
.footer_grid1 ul li{
	margin-bottom:1em;
}
.footer_grid ul li i{
	color:#bfbfbf;
    border: 1px solid #999;
    padding:.5em;
    border-radius: 100%;
	-webkit-border-radius: 100%;
	-moz-border-radius: 100%;
	-o-border-radius: 100%;
	-ms-border-radius: 100%;
    margin-right: 1em;
}
.footer_grid ul li span{
	display:block;
	margin-left: 3em;
}
.footer_grid ul li a{
	color:#bfbfbf;
	text-decoration:none;
}
.footer_grid ul li a:hover{
	color:#ec9114;
}
.footer_grid ul li{
    margin-bottom: 1.5em;
}
.copy_right p{
	color:#bfbfbf;
	line-height:2em;
	margin:0;
}
.copy_right p a{
	text-decoration:none;
	color:#00BFFF;
}
.copy_right p a:hover{
	color:#999;
}
.footer_grid1 ul li span {
    display: inline-block;
    margin-left: 0;
    padding-right: 1em;
}
.copy_right_social{
	padding: 3em 0 0;
    position: relative;
}
.agile_copy_right{
	text-align:right;
}
/*-- //footer --*/

/*Social Icons*/

.agileinfo_social_icons li{
	display:inline-block;
}
.agileinfo_social_icons li a{
	width: 40px;
    height: 40px;
    border: 2px solid #fff;
    border-radius: 20px;
    text-decoration: none;
    display: block;
    text-align: center;
}
.agileinfo_social_icons li a:hover{
	color:#fff;
}
.agileinfo_social_icons li a i{
	line-height:2.7em;
}
.facebook{
	color: #3b5998;
}
.facebook:hover{
	background: #3b5998;
}
.twitter{
	color: #1da1f2;
}
.twitter:hover{
	background: #1da1f2;
}
.google{
	color: #dd4b39;
}
.google:hover{
	background: #dd4b39;
}

/*Socail Icons*/
</style>

<link href="css/app.css" rel="stylesheet" type="text/css" media="all" />

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

<!--Footer-->
        

    <!-- Scripts -->    <script src="{{ asset('js/app.js') }}"></script>

    </div>
</body>
</html>
