<!DOCTYPE html>
<html>
<head>
	<title>Ming Dynasty Reflexology | Natural and Effective pain </title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/mingdynasty.css">
	@yield('top-script')
</head>
<body>
<div class="container-fluid">
	<div>
		<div class="row topnavbar">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<a href="{{{action('HomeController@landingpage')}}}"><img class="logo" src="/img/logo.png"></a>
			</div>
		</div>
		<div class="row navbar">
			<div class="col-lg-14 col-md-14 col-sm-14 col-xs-14 text-center">
				<a href="{{{action('HomeController@about')}}}"><div class="navarea aboutnav col-lg-3 col-md-3">
					About Ming Dynasty
				</div></a>

			{{-- Dropdown menu starts here --}}
			<div class="col-lg-3 col-md-3 navarea">
				<div class="dropdown">
					<div id="dropdownservice" class="dropdown-toggle signaturenav" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						Signature Services
					</div>
					<ul class="dropdown-menu servicedropdown" aria-labelledby="dropdownservice">
						<li><a href="{{{action('HomeController@completesession')}}}">Complete Reflexology Session</a></li>
						<li><a href="{{{action('HomeController@pedicure')}}}">High Quality Pedicure</a></li>
						<li><a href="{{{action('HomeController@manicure')}}}">Rejuvenating Manicure</a></li>
					</ul>
				</div>
			</div>


				<a href="{{{action('HomeController@contact')}}}"><div class="navarea appointmentnav col-lg-3 col-md-3">
					Request Appointment
				</div></a>
				<a href="{{{action('HomeController@products')}}}"><div class="navarea productsnav col-lg-3 col-md-3">
					Products and Gift Certificates
				</div></a>
			</div>
		</div>
	</div>
	<div class="footer navbar-fixed-bottom">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
				<strong><div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<span class="footline">Call us to book</span></strong><br>
					1-806-355-5695<br>
					1-806-676-8252 (text)
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<strong><span class="footline">Email us</span></strong><br>
					thai@mingdynasty.co
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
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