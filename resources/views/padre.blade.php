<!DOCTYPE html>
<html lang="es" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>UEMAG WEB</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		


		<link rel="stylesheet" href="{{ asset('css/css_plantilla/linearicons.css')}}">
		<link rel="stylesheet" href="{{ asset('css/css_plantilla/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/css_plantilla/bootstrap.css')}}">
		<link rel="stylesheet" href="{{ asset('css/css_plantilla/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{ asset('css/css_plantilla/nice-select.css')}}">
		<link rel="stylesheet" href="{{ asset('css/css_plantilla/animate.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/css_plantilla/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{ asset('css/css_plantilla/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{ asset('css/css_plantilla/main.css')}}">
        
        
	</head>
	<body>
		<header>
			
		
			<div class="logo-wrap">
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-4 col-md-4 col-sm-12 logo-left no-padding">
							<a href="index.html">
								<img class="img-fluid" src="{{asset('img/logoMAG.png')}}" alt=""width="80" height="80">
							</a>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12 logo-right no-padding ads-banner">
						<h4 class="text-center" class="font-weight-bold">"La enseñanza que deja huella no es la que se hace de cabeza a cabeza, sino de corazón a corazón"</h4>	
						
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu" id="main-menu">
				<div class="row align-items-center justify-content-between">
					<nav id="nav-menu-container">
						<ul class="nav-menu">
						<li class="menu-active"><a href="{{url('/')}}">Inicio</a></li>
							<li><a href="{{url('/social')}}">Social</a></li>
							<li><a href="{{url('/personals')}}">Cuerpo de Trabajo</a></li>
							{{-- <li class="menu-has-children"><a href="">Post Types</a> --}}
						    {{-- <ul>
								<li><a href="standard-post.html">Standard Post</a></li>
								<li><a href="image-post.html">Image Post</a></li>
								<li><a href="gallery-post.html">Gallery Post</a></li>
								<li><a href="video-post.html">Video Post</a></li>
								<li><a href="audio-post.html">Audio Post</a></li>
							</ul> --}}
						  </li>
						  {{-- <li><a href="about.html">About</a></li> --}}
						  <li><a href="/#buzon">Buzón</a></li>
					   </ul>
					</nav><!-- #nav-menu-coantainer -->
					
				</div>
			</div>
        </header>
        

        @yield('contenido')



		<script src="{{asset('js/js_plantilla/vendor/jquery-2.2.4.min.js')}}" defer></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="{{asset('js/js_plantilla/vendor/bootstrap.min.js')}}"></script>
		<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script> -->
		<script src="{{asset('js/js_plantilla/easing.min.js')}}"></script>
		<script src="{{asset('js/js_plantilla/hoverIntent.js')}}"></script>
		<script src="{{asset('js/js_plantilla/superfish.min.js')}}"></script>
		<script src="{{asset('js/js_plantilla/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('js/js_plantilla/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('js/js_plantilla/mn-accordion.js')}}"></script>
		<script src="{{asset('js/js_plantilla/jquery-ui.js')}}"></script>
		<script src="{{asset('js/js_plantilla/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('js/js_plantilla/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/js_plantilla/mail-script.js')}}"></script>
		<script src="{{asset('js/js_plantilla/main.js')}}"></script>


    </body>
</html>