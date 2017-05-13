<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="{{{ asset('images/whiteninja.png') }}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
    @yield('title')
    </title>

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
<div class="wrapper nobgimg">
    <div id="app">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container ">
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
                    <ul class="nav navbar-nav  navbar-right">
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

                                <ul class="dropdown-menu inverse" role="menu">
                                    <li class="inverse" >
                                        <a  class="inverse" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <span class="white">Logout</span> 
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

        <div class="container mycontainer">
        @yield('content')
        </div>
   
        <footer class="footer stickyfooter inverse">
        <div class="container">
        <p>This is my footer content.</p>
        </div> 
        </footer>
  </div> 

    <!-- Scripts -->    <script src="{{ asset('js/app.js') }}"></script>

  </div>  
</body>
</html>
