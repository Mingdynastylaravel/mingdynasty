@extends('layouts.master')
@section('content')
<div class="about">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 text-center">
			<h1 class="heading">Request Appointment</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
			<div class="col-lg-6 col-md-6">
				We would love to hear from you whether you are interested in a free consultation, a noteworthy experience, or if you have general questions! 
			</div>
			<div class="col-lg-3 col-md-3">
				<strong>Ming Dynasty</strong><br>
				<span class="disclaimer">Serving Amarillo for over 25 years</span><br>
				<bR>
				5221 Floyd Ave<br>
				Amarillo, TX 79106
			</div>
			<div class="col-lg-3 col-md-3">
				<strong>Call us to Book</strong><br>
				<span class="disclaimer">(call)</span><br>
				1-806-355-5695<br>
				<span class="disclaimer">(text)</span><br>
				1-806-676-8252<br>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2">
			<form class="form-horizontal" method="POST">
				<div class="col-lg-2 col-md-2">
					<div class="form-group">
						<input type="text" name="name" placeholder="name">
					</div>
					<div class="form-group">
						<input type="text" name="email" placeholder="email">
					</div>
					<div class="form-group">
						<input type="text" name="phone" placeholder="phone">
					</div>
					<div class="form-group">
						<input type="text" name="subject" placeholder="subject">
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-4 col-md-4">
						<textarea class="messagebox" cols="20" rows="5" name="message">Message</textarea><br>
						<button class="btn btn-primary">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@stop