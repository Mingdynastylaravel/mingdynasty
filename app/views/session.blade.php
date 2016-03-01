@extends('layouts.master')
@section('content')
<div class="about">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">
			<h1 class="heading">Complete Reflexology Session</h1>
			<div class="divider"></div>
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
			<h4>Experience an expert reflexology session focused on pain relief specific, but not limited, to plantar fasciitis (heel pain), sports injury, and neuropathy (diabetic nerve complications). Reflexology is also beneficial in alleviating negative pregnancy symptoms.</h4>		
		</div>
	</div>
	
	<div class="link row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">
			<a href="{{{action('HomeController@contact')}}}"><button class="btn btn-success">Schedule an appointment today!</button></a>
		</div>
	</div>
</div>
@stop