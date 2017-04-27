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
    
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.11.1.min.js"></script>
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>


	
<body>
<!-- banner -->
	<div class="banner-figures">
		<div class="banner">
			<div class="container banner-drop">
				<div class="header">

					<div class="clearfix"> </div>
				</div>
				<div class="logo animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h1><a href="index.html">Tech It</a></h1>
				</div>
				<div class="social-icons animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
					<ul>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="google"></a></li>
						<li><a href="#" class="p"></a></li>
					</ul>
				</div>
			</div>
		</div>
			<script>
				(function($){
				  $(".menu-icon").on("click", function(){
						$(this).toggleClass("open");
						$(".container").toggleClass("nav-open");
						$("nav ul li").toggleClass("animate");
				  });
				  
				})(jQuery);
			</script>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom animated wow lightSpeedIn" data-wow-duration="1500ms" data-wow-delay="800ms">
		<ul id="flexiselDemo1">	
			<li>
				<div class="item item-sub">
					<div class="item1">
						<i class="glyphicon glyphicon-cloud-download" aria-hidden="true"></i>
						<h3></h3>
					</div>
					<div class="p-mask">
						<h4></h4>
						<p></p>
					</div>
				</div>
			</li>
			<li>
				<div class="item item-sub1">
					<div class="item1">
						<i class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></i>
						<h3></h3>
					</div>
					<div class="p-mask">
						<h4></h4>
						<p></p>
					</div>
				</div>
			</li>
			<li>
				<div class="item item-sub2">
					<div class="item1">
						<i class="glyphicon glyphicon-save" aria-hidden="true"></i>
						<h3></h3>
					</div>
					<div class="p-mask">
						<h4></h4>
						<p></p>
					</div>
				</div>
			</li>
			<li>
				<div class="item item-sub3">
					<div class="item1">
						<i class="glyphicon glyphicon-flash" aria-hidden="true"></i>
						<h3></h3>
					</div>
					<div class="p-mask">
						<h4></h4>
						<p></p>
					</div>
				</div>
			</li>
		</ul>
			<script type="text/javascript">
				$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 2500,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				
			 });
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	</div>
<!-- //banner-bottom -->
<!-- banner-bottom-grids -->
	<div class="banner-bottom-grids">
		<div class="col-md-7 banner-bottom-grid-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h2><span></span></h2>
			<p></p>
			<div class="more">
				<a href="#">Start Now!</a>
			</div>
		</div>
		<div class="col-md-5 banner-bottom-grid animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
			<img src="images/6.jpg" alt=" " class="img-responsive" />
			<div class="banner-bottom-grid1">
				
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	
<!-- //banner-bottom-grids -->


<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>
@endsection

<!--footer-->

