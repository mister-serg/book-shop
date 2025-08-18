<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Favicons -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <link rel="apple-touch-icon" href="{{ asset ('assets/images/icon.png') }}">

        <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset ('assets/css/plugins.css') }}">
        <link rel="stylesheet" href="{{ asset ('assets/style.css') }}">

        <!-- Cusom css -->
        <link rel="stylesheet" href="{{ asset ('assets/css/custom.css') }}">

        <!-- Modernizer js -->
        <script src="{{ asset ('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
    	<div class="wrapper wrapper-boxed-layout" id="wrapper">    
			<div class="min-h-screen bg-gray-100">
			@include('layouts.navigation')

			<!-- Page Heading -->
			@if (isset($header))
				<header class="bg-white shadow">
					<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
						{{ $header }}
					</div>
				</header>
			@endif

			<!-- Page Content -->
			<main>
					{{ $slot }}
			</main>
			</div>
		
			<!-- Footer Area -->
			<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
				<div class="footer-static-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="footer__widget footer__menu">
									<div class="ft__logo">
										<a href="{{ route ('index') }}">
											<img src="{{ asset ('assets/images/logo/3.png') }}" alt="logo">
										</a>
										<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered duskam alteration variations of passages</p>
									</div>
									<div class="footer__content">
										<ul class="social__net social__net--2 d-flex justify-content-center">
											<li><a href="#"><i class="bi bi-facebook"></i></a></li>
											<li><a href="#"><i class="bi bi-google"></i></a></li>
											<li><a href="#"><i class="bi bi-twitter"></i></a></li>
											<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
											<li><a href="#"><i class="bi bi-youtube"></i></a></li>
										</ul>
										<ul class="mainmenu d-flex justify-content-center">
											<li><a href="index.html">Trending</a></li>
											<li><a href="index.html">Best Seller</a></li>
											<li><a href="index.html">All Product</a></li>
											<li><a href="index.html">Wishlist</a></li>
											<li><a href="index.html">Blog</a></li>
											<li><a href="index.html">Contact</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright__wrapper">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="copyright">
									<div class="copy__right__inner text-left">
										<p>Copyright <i class="fa fa-copyright"></i> <a href="#">Boighor.</a> All Rights Reserved</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="payment text-right">
									<img src="{{ asset('assets/images/icons/payment.png') }}" alt="" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- //Footer Area -->
		
	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="{{ asset('assets/js/vendor/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins.js') }}"></script>
	<script src="{{ asset('assets/js/active.js') }}"></script>
    </body>
</html>
