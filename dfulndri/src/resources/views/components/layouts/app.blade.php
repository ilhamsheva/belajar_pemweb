<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<title>Clark - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('front/css/open-iconic-bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">

	<link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">

	<link rel="stylesheet" href="{{ asset('front/css/aos.css') }}">

	<link rel="stylesheet" href="{{ asset('front/css/ionicons.min.css') }}">

	<link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{ asset('front/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('front/css/style.css') }}">

    @livewireStyles
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="{{route('home')}}">Clark</a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
				data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="{{route('home')}}" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="{{route ('about')}}" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="{{route('resume')}}" class="nav-link"><span>Resume</span></a></li>
					<li class="nav-item"><a href="{{route('services')}}" class="nav-link"><span>Services</span></a></li>
					<li class="nav-item"><a href="{{route('skills')}}" class="nav-link"><span>Skills</span></a></li>
					<li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
					<li class="nav-item"><a href="#blog-section" class="nav-link"><span>My Blog</span></a></li>
					<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
				</ul>
			</div>
		</div>
	</nav>

    {{ $slot }}

    <footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">About</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
							there live the blind texts.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Services</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Design</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Web Development</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Business Strategy</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Data Analysis</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Graphic Design</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain
										View, San Francisco, California, USA</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929
											210</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text">info@yourdomain.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;
						<script>document.write(new Date().getFullYear());</script> All rights reserved | This template
						is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a
							href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>

    <script src="{{asset('front/js/jquery.min.js')}}"></script>
	<script src="{{asset('front/js/jquery-migrate-3.0.1.min.js')}}"></script>
	<script src="{{asset('front/js/popper.min.js')}}"></script>
	<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('front/js/jquery.easing.1.3.js')}}"></script>
	<script src="{{asset('front/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('front/js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('front/js/aos.js')}}"></script>
	<script src="{{asset('front/js/jquery.animateNumber.min.js')}}"></script>
	<script src="{{asset('front/js/scrollax.min.js')}}"></script>

	<script src="{{asset('front/js/main.js')}}"></script>

    @livewireScripts
</body>