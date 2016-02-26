<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function landingpage()
	{
		return View::make('landing');
	}

	public function about()
	{
		return View::make('about');
	}

	public function services()
	{
		return View::make('services');
	}

	public function completesession()
	{
		return View::make('session');
	}

	public function pedicure()
	{
		return View::make('pedicure');
	}

	public function manicure()
	{
		return View::make('manicure');
	}

	public function contact()
	{
		return View::make('contact');
	}

	public function sendcontact()
	{
		return Redirect::action('HomeController@landingpage');
	}

	public function products()
	{
		return View::make('products');
	}
}
