<!DOCTYPE html>
<html>
<head>
	<title>Ming Dynasty Reflexology</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/mingdynasty.css">
	@yield('top-script')
</head>
<body>
<div class="container-fluid">
	<div class="navbar-fixed-top">
		<div class="row topnavbar">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<img class="logo" src="/img/logo.png">
			</div>
		</div>
		<div class="row navbar">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<a href="{{{action('HomeController@landingpage')}}}"><div class="col-lg-2 col-md-2">
					Welcome
				</div></a>
				<a href="{{{action('HomeController@about')}}}"><div class="col-lg-2 col-md-2">
					About Ming Dynasty
				</div></a>
				<a href="{{{action('HomeController@services')}}}"><div class="col-lg-2 col-md-2">
					Signature Services
				</div></a>
				<a href="{{{action('HomeController@contact')}}}"><div class="col-lg-2 col-md-2">
					Request Appointment
				</div></a>
				<a href="{{{action('HomeController@products')}}}"><div class="col-lg-4 col-md-4">
					Products and Gift Certificates
				</div></a>
			</div>
		</div>
	</div>
	<div class="footer navbar-fixed-bottom">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<strong><div class="col-lg-4 col-md-4">
					<span class="footline">Call us to book</span></strong><br>
					1-806-355-5695<br>
					1-806-676-8252 (text)
				</div>
				<div class="col-lg-4 col-md-4">
					<strong><span class="footline">Email us</span></strong><br>
					thai@mingdynasty.co
				</div>
				<div class="col-lg-4 col-md-4">
					<strong><span class="footline">Find us</span></strong><br>
					5221 Floyd Ave<br>
					Amarillo, TX 79106
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<div class="col-lg-6 col-lg-offset-3">
					<span class="disclaimer">Copyright © 2016 Ming Dynasty | Site Design by Victor Vo and Reagan Wilkins</span>
				</div>
			</div>
		</div>
	</div>
@yield('content')
</div>

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.js"></script>
@yield('bottom-script')
</body>
</html>