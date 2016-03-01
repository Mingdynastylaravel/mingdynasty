@extends('layouts.master')
@section('content')
<div class="about">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">
			<h1 class="heading">
				High Quality Pedicure
			</h1>
		</div>
	</div>
	<div class="sessiontime row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">
			<h4>(60 minute session)</h4>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-4 col-md-8 col-md-offset-4 text-center">
			<div class="sessionpicture">blah</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">
			<h4>Enjoy an exceptional, detoxifying, pain relieving, and reinvigorating pedicure treatment. You'll receive more than a standard pedicure. Our services include expert reflexology application, as well as the use the high quality products.</h4>
		</div>
	</div>
	<div class="link row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">
			<a href="{{{action('HomeController@contact')}}}"><button class="btn btn-success">Schedule an appointment today!</button></a>
		</div>
	</div>
</div>
@stop