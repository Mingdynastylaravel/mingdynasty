@extends('layouts.master')
@section('content')
<div class="about">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">
			<h1 class="heading">
				Rejuvenating Manicure
			</h1>
			<div class="divider"></div>
		</div>
	</div>
	<div class="sessiontime row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">
			<h4>(30 minute session)</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 text-center">
			<div class="sessionpicture">blah</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">
			<h4>Treat your hands to a replenishing manicure. Our manicures use quality products and expert application. We also help encourage and stimulate natural nail growth and restoration in a healthy manner.</h4>
		</div>
	</div>
	<div class="link row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">
			<a href="{{{action('HomeController@contact')}}}"><button class="btn btn-success">Schedule an appointment today!</button></a>
		</div>
	</div>
</div>
@stop