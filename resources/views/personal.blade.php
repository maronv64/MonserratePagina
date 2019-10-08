<!DOCTYPE html>
<html lang="zxx" class="no-js">
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
							<li class="menu-active"><a href="index.html">Home</a></li>
							<li><a href="archive.html">Archive</a></li>
							<li><a href="category.html">Category</a></li>
							<li class="menu-has-children"><a href="">Post Types</a>
						    <ul>
								<li><a href="standard-post.html">Standard Post</a></li>
								<li><a href="image-post.html">Image Post</a></li>
								<li><a href="gallery-post.html">Gallery Post</a></li>
								<li><a href="video-post.html">Video Post</a></li>
								<li><a href="audio-post.html">Audio Post</a></li>
							</ul>
						  </li>
						  <li><a href="about.html">About</a></li>
						  <li><a href="#buzon">Buzón</a></li>
					   </ul>
					</nav><!-- #nav-menu-coantainer -->
					<div class="navbar-right">
						<form class="Search">
							<input type="text" class="form-control Search-box" name="Search-box" id="Search-box" placeholder="Search">
							<label for="Search-box" class="Search-box-label">
								<span class="lnr lnr-magnifier"></span>
							</label>
							<span class="Search-close">
								<span class="lnr lnr-cross"></span>
							</span>
						</form>
					</div>
				</div>
			</div>
		</header>
		
		<div class="site-main-container">
			<!-- Start top-post Area -->
			<section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row small-gutters">
						<div class="col-lg-8 top-post-left">
							<div class="feature-image-thumb relative">
								<div class="overlay overlay-bg"></div>
									@isset($institucion)
										<img class="img-fluid" src="{{asset('/img/biblioteca/')}}{{'/'.$institucion['file_name'].'.'.$institucion['file_ext']}}" alt="" style="width:1800px!important; height:450px!important">

									@endisset
							</div>
							<div class="top-post-details">
								<ul class="tags">
									<li><a href="#">Unidad Educativa Monserrate Álava González</a></li>
								</ul>
								<a href="image-post.html">
									<h3></h3>
								</a>
								<!-- {{--<ul class="meta">
									<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
									<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
									<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
								</ul>--}} -->
							</div>
						</div>
						<div class="col-lg-4 top-post-right">
							<div class="single-top-post">
								<div class="feature-image-thumb relative">
									<div class="overlay overlay-bg"></div>
									{{--<img class="img-fluid" src="{{asset('/img/biblioteca/')}}{{'/'.$institucion['file_name'].'.'.$institucion['file_ext']}}" alt="">		--}}							
									<img class="img-fluid" src="img/zzz.jpg" alt="">
								</div>
								<div class="top-post-details">
									@isset($institucion)
										<a href="image-post.html">
											<h4>{{$institucion["mision"]}}</h4>
										</a>
										<ul class="tags">
											<li><a href="#">Misión</a></li>
										</ul>
									@endisset
									
									<!--{{-- <ul class="meta">
										<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
										<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
									</ul>--}} -->
								</div>
							</div>
							<div class="single-top-post mt-10">
								<div class="feature-image-thumb relative">
									<div class="overlay overlay-bg"></div>
									<img class="img-fluid" src="img/zzz.jpg" alt="">
								</div>
								<div class="top-post-details">
									@isset($institucion)
										<a href="image-post.html">
											<h4>{{$institucion["vision"]}}</h4>
										</a>
										<ul class="tags">
											<li><a href="#">Visión</a></li>
										</ul>
									@endisset
									
									<!--{{-- <ul class="meta">
										<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
										<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
										<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
									</ul>--}} -->
								</div>
							</div>
						</div>
						<div class="col-lg-12">
						   <hr><hr/>
							<!-- <div class="news-tracker-wrap">
								<h6><span>Breaking News:</span>   <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
							</div> -->
						</div>
					</div>
				</div>
			</section>
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
							<div class="latest-post-wrap">
								<h4 class="cat-title">Noticias y Eventos</h4>
									@isset($social)
										@foreach($social as $item)
										<div class="single-latest-post row align-items-center">
											<div class="col-lg-5 post-left">
												<div class="feature-img relative">
													<div class="overlay overlay-bg"></div>
													<img class="img-fluid" src="{{asset('/img/biblioteca/')}}{{'/'.$item['file_name'].'.'.$item['file_ext']}}" alt="" style="width:300px!important; height:200px!important">
												</div>
												<ul class="tags">
													<li><a href="#">{{$item["tiposocial"]["descripcion"]}}</a></li>
												</ul>
											</div>
											<div class="col-lg-7 post-right">
												<a href="image-post.html">
													<h4>{{$item["titulo"]}}</h4>
												</a>
												<!-- <ul class="meta">
													<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
													<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
													<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
												</ul> -->
												<p class="excert">
												{{$item["descripcion"]}}
												</p>
											</div>
										</div>
										@endforeach	
									@endisset
															
							</div>
							<!-- End latest-post Area -->
							
							<!-- Start banner-ads Area -->
							<!-- <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
								<img class="img-fluid" src="img/banner-ad.jpg" alt="">
							</div> -->
							<!-- End banner-ads Area -->
							<!-- Start popular-post Area -->
							<div class="popular-post-wrap">
								<h4 class="title">Autoridades</h4>
								<div class="feature-post relative">
									<div class="feature-img relative">
										<div class="overlay overlay-bg"></div>
										<img class="img-fluid" src="img/magAutoridad.jpg" alt="">
									</div>
									<div class="details">
										<ul class="tags">
											<li><a href="#">AUTORIDADES UEMAG</a></li>
										</ul>
										<a href="image-post.html">
											<h6></h6>
										</a>
										<!-- <ul class="meta">
											<li><a href="#"><span class="lnr lnr-user"></span></a></li>
											<li><a href="#"><span class="lnr lnr-calendar-full"></span></a></li>
											<li><a href="#"><span class="lnr lnr-bubble"></span></a></li>
										</ul> -->
									</div>
								</div>
								
								<div class="row mt-20 medium-gutters">
									@isset($personal)
											@foreach($personal as $item )
										<div class="col-lg-6 single-popular-post">
											<div class="feature-img-wrap relative">
												<div class="feature-img relative">
													<div class="overlay overlay-bg"></div>
													<img class="img-fluid" src="{{asset('/img/biblioteca/')}}{{'/'.$item['file_name'].'.'.$item['file_ext']}}" alt="">
												</div>
												<ul class="tags">
													<li><a href="#">{{$item['cargo']}}</a></li>
												</ul>
											</div>
											<div class="details">
												<a href="image-post.html">
													<h4>{{$item['apellidos'] . ' ' . $item['nombres']}}</h4>
												</a>
												<ul class="meta">
													<li><a href="#"><span class="lnr lnr-user"></span>{{$item['telefono']}}</a></li>
													<!-- <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
													<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li> -->
												</ul>
												<p class="excert">
													{{$item['titulo']}}
												</p>
											</div>
										</div>
									@endforeach
									@endisset
									<!-- <div class="col-lg-6 single-popular-post">
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
												<img class="img-fluid" src="img/f3.jpg" alt="">
											</div>
											<ul class="tags">
												<li><a href="#">Travel</a></li>
											</ul>
										</div>
										<div class="details">
											<a href="image-post.html">
												<h4>A Discount Toner Cartridge Is
												Better Than Ever.</h4>
											</a>
											<ul class="meta">
												<li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
												<li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
											</ul>
											<p class="excert">
												Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
											</p>
										</div>
									</div> -->
								</div>
							</div>
							<!-- End popular-post Area -->
							<!-- Start relavent-story-post Area -->
							<div class="relavent-story-post-wrap mt-30">
								<h4 class="title">Cuadro de Honor</h4>
								<div class="relavent-story-list-wrap">
									@isset($estudiantes['lista_estudiante'])
										@foreach($estudiantes['lista_estudiante'] as $item )
											@if($loop->iteration<=3)
												<div class="single-relavent-post row align-items-center">
													<div class="col-lg-5 post-left">
														<div class="feature-img relative">
															<div class="overlay overlay-bg"></div>
															<img class="img-fluid" src="{{asset('/img/biblioteca/')}}{{'/'.$item['estudiante']['file_name'].'.'.$item['estudiante']['file_ext']}}" alt="">
														</div>
														<ul class="tags">
															<li><a href="#">{{$item['Cargo']}}</a></li>
														</ul>
													</div>
													<div class="col-lg-7 post-right">
														<a href="image-post.html">
															<h4>{{$item['estudiante']['apellido'] . ' ' .$item['estudiante']['nombre']}}</h4>
														</a>
														<ul class="meta">
															<li><a href="#"><span class="lnr lnr-user"></span>{{$item['estudiante']['especialidad']['descripcion'] }}</a></li>
															<!-- <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
															<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li> -->
														</ul>
														<!-- <p class="excert">
															Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
														</p> -->
													</div>
												</div>
											@endif
										@endforeach
									@endisset
									

								</div>
							</div>
							<!-- End relavent-story-post Area -->
						</div>
						<div class="col-lg-4">
							<div class="sidebars-area">
								<div class="single-sidebar-widget editors-pick-widget">
									<h6 style="text-align:center" class="title">Himno de la Institucion</h6>
									<div >
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
													@isset($institucion)
														<h4 style="text-align:center"><?php echo $institucion["himno"]?></h4>
													@endisset
												
											</div>
										 </div>	
									</div>
								</div>
								<div class="single-sidebar-widget ads-widget">
									<!-- <img class="img-fluid" src="img/sidebar-ads.jpg" alt=""> -->
									<form  class ="img-fluid" action="">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.384255167668!2d-80.17900218478175!3d-0.8451668993834424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902ba1bb9869a777%3A0x5339c8381c092674!2sColegio%20Monserrat%20Alava%20de%20Gonzales!5e0!3m2!1ses!2sec!4v1569945848955!5m2!1ses!2sec" width="315" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
									</form>
								</div>
								
								<div class="single-sidebar-widget social-network-widget">
									<h6 style="text-align:center" class="title">Redes Sociales</h6>
									<ul class="social-list">
										@isset($lista_Enlace)
											@foreach($lista_Enlace as $item)
												<li class="d-flex justify-content-between align-items-center fb">
													<div class="icons d-flex flex-row align-items-center">
														<i class="fa fa-facebook" aria-hidden="true"></i>
														<a target="_blank" href="{{$item['url']}}">{{$item['name']}}</a>
													</div>											
												</li>
											@endforeach
										@endisset
									
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End latest-post Area -->
		</div>
		
		<!-- start footer Area -->
		<footer id="buzon" class="footer-area section-gap">
			<div class="container">
				<div>					
					<form action ="{{url('/buzon')}}" method="POST" class="row">
					@csrf 
                    @method('POST')   
						<div class = "col-md-6">
							<div class="form-group">
								<label for="formGroupExampleInput">nombre</label>
								<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name ="nombre">
							</div>
							<div class="form-group">
								<label for="formGroupExampleInput2">correo</label>
								<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" name="email">
							</div>
							<div class="form-group">
								<input class="btn btn-outline-info" type="submit" value="enviar">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="formGroupExampleInput4">mensaje</label>							
								<textarea name="mensaje" class="form-control" id="" cols="30" rows="10"></textarea>
							</div>
						</div>
					</form>
                    
					
					
				</div>
				
			 </div>
		</footer>
		<!-- End footer Area -->
		
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
