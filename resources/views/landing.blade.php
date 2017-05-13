@extends('layouts.app')

@section('title', 'Welcome Genin')

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
        <div class="jumbotron "><!-- start jumbotron-->
            

            <section class=" ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4"> 
                            <h2 class="textbggrey">Welcome To GigaSensei</h2>
                        </div>
                        <div class="col-lg-4 col-md-offset-4" > 
                            <h2 class="textbggrey">Find Your Zen</h2>
                        </div>
                    </div>    
                </div>  
            </section>


            <div class="playbuttonspacer">
                 <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center " > 
                    <a href=""data-toggle="modal" data-target="#myModal"><img src="images/play.png "></a>
                </div>
                </div>
            </div>
        </div><!-- end
         jumbotron-->
    <!-- Main jumbotron for a primary marketing message or call to action -->

 <div class="pagecontent">
<!-- Modal -->
<div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
       <iframe src="https://www.youtube.com/embed/kbNtuBdUyHo?list=PLC6qIbU1olyXQe1WOKt8UJ4hErx3D7qt8" frameborder="0" allowfullscreen class="video"></iframe>
      </div>
    </div>
  </div>
</div>


        <div class="container-fluid textbgorange" align="center">
       <div class="col-md-12"> 
      <!-- Example row of columns -->
      <div class="row ">
        <div class="col-md-6">
   

          <h1>What Is GigaSensei</h1>
          <p>There is so much information out there on how to do something. We are making it easier for the student to connect with the masters of tech 
              by bringing the masters to them. 
                        <p><a class="btn btn-danger" href="#" role="button">See A Demo &raquo;</a></p>

          </p>
  
       
       
        </div>
        <div class="col-md-6 visible-lg">
         <img src="images/macbook@2x.png" alt="" width="450px">
       </div>
        <div class="col-md-6 visible-md">
         <img src="images/macbook@2x.png" alt="" width="450px">
       </div>

       <div class="col-md-6 visible-xs">
         <img src="images/macbook@2x.png" alt="" width="450px">
       </div>

      </div>
</div>
      
    </div>



<div class="container-fluid textblack" align="center">
<h3>Train With The Best, Level Up Your Skills, Get Live Help, Become Master of The Dojo</h3> <btn class="btn btn-danger">Try it Free</btn>

    </div>


   
    <div class="container-fluid textbggrey">
        <div class="col-md-12">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
            <img src="images/study.png" alt="" width="240">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-danger" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <img src="images/computer.png" alt="" width="240">

          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-danger" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
                                    <img src="images/ninja.png" alt="" width="240">

          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-danger" href="#" role="button">View details &raquo;</a></p>
        </div>
        </div>
      </div>

     
    </div>




    <!--<div class="container-fluid textbgorange">
        <video loop muted autoplay class="ninjavideo">
            <source src="videos/ninja.mp4" type="video/mp4">
        </video>

    </div>-->
 



<div class="container-fluid textbgwhite" align="center">
    <h2>Hear What Some of Our Students Have To Say</h2>
    
    <img src="images/companies-badge.png"  width="100%">
    <hr>
        <div class="col-md-3 quote">
            <p> "GigaSensei has a The Best Instructors in the business they teach lessons that go far beyond the surface, touching nearly every aspect of how to design and develop for the web and iOS."</p>
            <img src="images/avatar.jpg" class="img-circle" alt="">
        </div>
                <div class="col-md-3 quote">
            <p> "GigaSensei has a The Best Instructors in the business they teach lessons that go far beyond the surface, touching nearly every aspect of how to design and develop for the web and iOS."</p>
            <img src="images/avatar.jpg" class="img-circle" alt="">
        </div>
                <div class="col-md-3 quote">
            <p> "GigaSensei has a The Best Instructors in the business they teach lessons that go far beyond the surface, touching nearly every aspect of how to design and develop for the web and iOS."</p>
            <img src="images/avatar.jpg" class="img-circle" alt="">
        </div>
                <div class="col-md-3 quote">
            <p> "GigaSensei has a The Best Instructors in the business they teach lessons that go far beyond the surface, touching nearly every aspect of how to design and develop for the web and iOS."</p>
            <img src="images/avatar.jpg" class="img-circle" alt="">
        </div>
</div>
@endsection

<!--footer-->

   
