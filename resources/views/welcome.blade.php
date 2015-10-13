<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class='no-js' lang='en'>
	<!--<![endif]-->
	<head>
		<meta charset='utf-8' />
		<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
                
                <meta name="description" content="Comunity Turism, Travel Guide Ecuador">
                <meta name="keywords" content="HTML,CSS,XML,JavaScript">
                <meta name="author" content="IguanaTrip group">
		<title>IguanaTrip - Coming Soon</title>	
		
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="apple-touch-icon" href="images/favicon.png" />
		
		
                {!! HTML::style('css/maximage.css') !!} 
		
                {!! HTML::style('css/styles.css') !!} 
                
		
		
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		
		<!--[if IE 6]>
			<style type="text/css" media="screen">
				.gradient {display:none;}
			</style>
		<![endif]-->
	</head>
     
	<body>

		<!-- Logo -->
		
                
                  <div id="logo_">
        	<div id="logo-imagen">
    	    
                <a href="eng"><img src="{!! ('img/index-logo.png')!!}" width="270" height="258" alt="IguanaTrip" /></a> 
                </div>
            <div id="logo-construccion">
       	    <img src="{!! ('img/index-rodelas.png')!!}" width="106" height="90" alt="IguanaTripconstruccion" /></div>
    </div>

		<!-- Switch to full screen -->
		<button class="full-screen" onclick="$(document).toggleFullScreen()"></button>

		<!-- Site Logo <div id="logo">Iguna Trip</div> -->
<div id="lang">
   	     <a href="esp"><img src="{!! ('img/index-bandera-2.png')!!}" width="29" height="29" alt="esp" /></a> 
    <a href="eng"><img src="{!! ('img/index-bandera-1.png')!!}" width="29" height="29" alt="eng" /></a> </div>



		<!-- Main Navigation -->
		<nav class="main-nav">
			<ul>
				<li><a href="#home" class="active">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>

		<!-- Slider Controls -->
		<a href="" id="arrow_left"><img src="{!! ('images/arrow-left.png')!!}" alt="Slide Left" /></a>
		<a href="" id="arrow_right"><img src="{!! ('images/arrow-right.png')!!}" alt="Slide Right" /></a>

		<!-- Home Page -->
		<section class="content show" id="home">
			<h1>Welcome</h1>
			<h5>Our new site is coming soon!</h5>
			<p>
                           IguanaTrip emerges as an alternative tourist community to defend and enhance the cultural and natural resources. Plan your trip and learn about the history and culture of the country while you engage in the reality of the local people.  
                        </p>
			<p><a href="#about">More info &#187;</a></p>
		</section>

		<!-- About Page -->
		<section class="content hide" id="about">
			<h1>About</h1>
			<h5>Here's a little about what we're up to.</h5>
			<p>IguanaTrip emerges as an alternative tourist community to defend and enhance the cultural and natural resources. Plan your trip and learn about the history and culture of the country while you engage in the reality of the local people.  
                            IguanaTrip will offer you practical information according to your interest on the specific place you decide to visit. Find hotels, day trips, museums, beaches, tourist sites, restaurants, bars, all kinds of attractions from the smallest to the largest. And most importantly, if you wish, IgunaTrip will guide you on your journey to help generate additional income to local communities looking forward to development.</p>
			
		</section>

		<!-- Contact Page -->
		<section class="content hide" id="contact">
			<h1>Contact</h1>
			<h5>Get in touch.</h5>
			<p>Email: <a href="#">info@iguanatrip.com</a><br />
				<br /></p>
			<p><br />
				</p>
		</section>
		
		<!-- Background Slides -->
		<div id="maximage">
			<div>
				<img src="{!! ('img/index-fondo.png')!!}" alt="" />
                                
				<img class="gradient" src="{!! ('images/backgrounds/gradient.png')!!}" alt="Galapagos" />
			</div>
			<div>
				<img src="{!! ('img/cotopaxi.jpg')!!}" alt="" />
				<img class="gradient" src="{!! ('images/backgrounds/gradient.png')!!}" alt="Galapagos" />
			</div>
                    
			<div>
				<img src="{!! ('img/galapagos2.jpg')!!}" alt="" />
				<img class="gradient" src="{!! ('images/backgrounds/gradient.png')!!}" alt="Galapagos" />
			</div>
			<div>
				<img src="{!! ('img/quito.jpg')!!}" alt="" />
				<img class="gradient" src="{!! ('images/backgrounds/gradient.png')!!}" alt="Galapagos" />
			</div>
			<div>
				<img src="{!! ('img/ecuador2.jpg')!!}" alt="" />
				<img class="gradient" src="{!! ('images/backgrounds/gradient.png')!!}" alt="Galapagos" />
			</div>
		</div>
		
                {!!HTML::script('js/jquery.js') !!}
		{!!HTML::script('js/jquery.easing.min.js') !!}
		{!!HTML::script('js/jquery.cycle.all.js') !!}
		{!!HTML::script('js/jquery.maximage.js') !!}
		{!!HTML::script('js/jquery.fullscreen.js') !!}
                {!!HTML::script('js/jquery.ba-hashchange.js') !!}
                {!!HTML::script('js/main.js') !!}
		
		<script type="text/javascript" charset="utf-8">
			$(function(){
				$('#maximage').maximage({
					cycleOptions: {
						fx: 'fade',
						speed: 1000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
						timeout: 9000,
						prev: '#arrow_left',
						next: '#arrow_right',
						pause: 0,
						before: function(last,current){
							if(!$.browser.msie){
								// Start HTML5 video when you arrive
								if($(current).find('video').length > 0) $(current).find('video')[0].play();
							}
						},
						after: function(last,current){
							if(!$.browser.msie){
								// Pauses HTML5 video when you leave it
								if($(last).find('video').length > 0) $(last).find('video')[0].pause();
							}
						}
					},
					onFirstImageLoaded: function(){
						jQuery('#cycle-loader').hide();
						jQuery('#maximage').fadeIn('fast');
					}
				});
	
				// Helper function to Fill and Center the HTML5 Video
				jQuery('video,object').maximage('maxcover');
	
			});
		</script>
  </body>
</html>
