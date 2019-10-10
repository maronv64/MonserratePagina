@extends('padre')
	
	@section('contenido')
		

		
		<div class="site-main-container">
			<!-- Start top-post Area -->
			
			<!-- End top-post Area -->
			<!-- Start latest-post Area -->
            <section class="top-post-area pt-10">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-12">
							<div class="hero-nav-area">
								<h1 class="text-white">Conozca Nuestras Autoridades</h1>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="news-tracker-wrap">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="latest-post-area pb-120">
				<div class="container no-padding">
					<div class="row">
						<div class="col-lg-8 post-list">
							<!-- Start latest-post Area -->
							<div class="relavent-story-post-wrap mt-30">
								<h4 class="title">Autoridades</h4>
								<div class="relavent-story-list-wrap">
									@isset($personal)
										@foreach($personal as $item  )
											
												<div class="single-relavent-post row align-items-center">
													<div class="col-lg-5 post-left">
														<div class="feature-img relative">
															<div class="overlay overlay-bg"></div>
															<img class="img-fluid" src="{{asset('/img/biblioteca/')}}{{'/'.$item['file_name'].'.'.$item['file_ext']}}" alt="" style="width:300px!important; height:200px!important">
														</div>
														<ul class="tags">
															<li><a href="#">{{$item['cargo']}}</a></li>
														</ul>
													</div>
													<div class="col-lg-7 post-right">
														<a href="image-post.html">
															<h4>{{$item['apellidos'] . ' ' . $item['nombres']}}</h4>
														</a>
														<ul class="meta">
															<li><a href="#"><span class="lnr lnr-user"></span>{{$item['telefono']}}</a></li>
															<!-- <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
															<li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li> -->
														</ul>
														<p class="excert">
													       {{$item['titulo']}}
												        </p>
														<!-- <p class="excert">
															Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
														</p> -->
													</div>
												</div>
											
										@endforeach
									@endisset
									

								</div>
							</div>
							<!-- End latest-post Area -->
							
							<!-- Start banner-ads Area -->
							<!-- <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
								<img class="img-fluid" src="img/banner-ad.jpg" alt="">
							</div> -->
							<!-- End banner-ads Area -->
							<!-- Start popular-post Area -->
							
							<!-- End popular-post Area -->
							<!-- Start relavent-story-post Area -->
							
							<!-- End relavent-story-post Area -->
						</div>
						<div class="col-lg-4">
							<div class="sidebars-area">
								<div class="single-sidebar-widget editors-pick-widget">
									<h6 style="text-align:center" class="title">Materias</h6>
									<div >
										<div class="feature-img-wrap relative">
											<div class="feature-img relative">
												<div class="overlay overlay-bg"></div>
													<ul class="social-list">
														@isset($lista_materias)
															@foreach($lista_materias as $item)
																<li class="d-flex justify-content-between align-items-center fb">
																	<div class="icons d-flex flex-row align-items-center">
																	
																		<h5 target="_blank" style="color:#000000" >{{$item['descripcion']}}</h5>
																	</div>											
																</li>
															@endforeach
														@endisset
													</ul>
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
		{{-- <footer id="buzon" class="footer-area section-gap">
			<div class="container">
				<div>					
					
					
				</div>
				
			 </div>
		</footer> --}}
		<!-- End footer Area -->
	
	@endsection