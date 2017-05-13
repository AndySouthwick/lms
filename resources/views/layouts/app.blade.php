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

         <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
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

       
        @yield('content')
       
   
         <div class="container-fluid textblack">
      <footer>
          <div class="row">
          <div class="col-md-3">
            <h1>GigaSensei</h1>
           
        </div>
        </div>
        <div class="row">
        <div class="col-md-2 col-md-offset-2">
            <h3>Students</h3>
            <ul>
                <li><a href="">Tutor Access</a></li>
                 <li> <a href="">For Individutal</a></li>
                 <li> <a href="">For the Software Pro</a></li>
              </ul>
            
        </div>
               <div class="col-md-2">
            <h3>Platform</h3>
            <ul>
           <li> <a href="">Browse Libraries</a></li>
               <li>  <a href="">Tracks</a></li>
                <li> <a href="">Measure Your Skills</a></li>
                 <li><a href="">Mobile Access</a></li>
                <li> <a href="">Course Catalog</a></li>
                <li> <a href="">Viewing</a></li>
               <li>  <a href="">Mentors</a></li>
            </ul>
        </div>
        <div class="col-md-2">
           
            <h3>Support</h3>
             <ul>
            <li><a href="">Help Center</a></li>
           <li>  <a href="">FAQ</a></li>
              </ul>
        </div>
        <div class="col-md-2">
            <h3>Company</h3>
            <ul>
            <li><a href="">Contact</a></li>
            <li> <a href="">About</a></li>
             <li> <a href="">Integrations</a></li>
              <li> <a href="">Blog</a></li>
               <li> <a href="">Become A Tutor</a></li>
               </ul>
        </div>
       
</div>
<div class="row">
     <div class="col-md-2 col-md-offset-10">

            <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
            <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
            <i class="fa fa-slack fa-2x" aria-hidden="true"></i>
            <i class="fa fa-youtube fa-2x" aria-hidden="true"></i>
        </div>
</div>
        <div class="row" align="center"> <p>@copy2017 GigasSensei.com</p></div>
      </footer>
      </div>

</div>
  </div> 

    <!-- Scripts -->    <script src="{{ asset('js/app.js') }}"></script>

  </div>  
</body>
</html>
