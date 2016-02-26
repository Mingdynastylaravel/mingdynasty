<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@landingpage');

Route::get('/about', 'HomeController@about');

// Route::get('/services', 'HomeController@services');

Route::get('/services/completesession', 'HomeController@completesession');

Route::get('/services/pedicure', 'HomeController@pedicure');

Route::get('/services/manicure', 'HomeController@manicure');

Route::get('/contact', 'HomeController@contact');

Route::post('/contact', 'HomeController@sendcontact');

Route::get('/products', 'HomeController@products');
