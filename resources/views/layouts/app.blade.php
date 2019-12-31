<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Aktivists</title>
<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- CSS
================================================== -->
{{-- <link rel="stylesheet" href="{{ asset('/themes/workscout_2019/css/style.css') }}"> --}}
<link rel="stylesheet" href="{{ asset('style.css') }}">
<link rel="stylesheet" href="{{ asset('css/colors.css') }}">
</head>
<body>
    <div id="wrapper">
<!-- Header
================================================== -->
<header class="transparent sticky-header">
<div class="container">
	<div class="sixteen columns">
		<!-- Logo -->
		<div id="logo">
			<h1><a href="index.html"><img src="{{ asset('img/logo2.png')}}" alt="Work Scout" /></a></h1>
		</div>
		<!-- Menu -->
		<nav id="navigation" class="menu">
			<ul id="responsive">
				<li><a id="current" href="index.html">Home</a>
					<ul>
						<li><a href="index.html">Home #1</a></li>
						
					</ul>
				</li>
				<li><a href="#">Pages</a>
					<ul>
						
						<li><a href="index.html">Contact</a></li>
					</ul>
				</li>
				<li><a href="#">Browse Listings</a>
					<ul>
						<li><a href="index.html">Browse Jobs</a></li>
						<li><a href="index.html">Browse Resumes</a></li>
						<li><a href="index.html">Browse Categories</a></li>
					</ul>
				</li>
				<li><a href="#">Dashboard</a>
					<ul>
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="index.html">Messages</a></li>
						<li><a href="index.html">Manage Resumes</a></li>
						<li><a href="index.html">Add Resume</a></li>
						<li><a href="index.html">Job Alerts</a></li>
						<li><a href="index.html">Manage Jobs</a></li>
						<li><a href="index.html">Manage Applications</a></li>
						<li><a href="index.html">Add Job</a></li>
						<li><a href="index.html">My Profile</a></li>
					</ul>
				</li>
			</ul>

			@if (Auth::guest())
                <ul class="float-right">
					<li><a href="/login#tab2"><i class="fa fa-user"></i> Sign Up</a></li>
					<li><a href="/login"><i class="fa fa-lock"></i> Log In</a></li>
				</ul>
				@else
            
			<ul class="float-right">
				<li><a href="/home"><i class="fa fa-user"></i> My Account</a></li>
				<li><a href="/logout"><i class="fa fa-lock"></i> Log Out</a></li>
			</ul>
			@endif
		</nav>
		<!-- Navigation -->
		<div id="mobile-navigation">
			<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i></a>
		</div>
	</div>
</div>
</header>
<div class="clearfix"></div>
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>My Account</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>My Account</li>
				</ul>
			</nav>
		</div>

	</div>
</div>


    <main class="py-4">
            @yield('content')
    </main>
<<!-- Wrapper / End -->
<!-- Scripts
================================================== -->
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"> </script>
<script src="{{ asset('js/jquery-migrate-3.1.0.min.js')}}"></script>
<script src="{{ asset('js/custom.js')}}"></script>
<script src="{{ asset('js/jquery.superfish.js')}}"></script>
<script src="{{ asset('js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{ asset('js/jquery.themepunch.showbizpro.min.js')}}"></script>
<script src="{{ asset('js/jquery.flexslider-min.js')}}"></script>
<script src="{{ asset('js/chosen.jquery.min.js')}}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/waypoints.min.js')}}"></script>
<script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('js/jquery.jpanelmenu.js')}}"></script>
<script src="{{ asset('js/stacktable.js')}}"></script>
<script src="{{ asset('js/slick.min.js')}}"></script>
<script src="{{ asset('js/headroom.min.js')}}"></script>
</body>
</html>