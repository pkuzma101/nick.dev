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

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function index()
	{
		return View::make('index');
	}

	public function showVideo()
	{
		return View::make('video');
	}

	public function stills()
	{
		return View::make('stills_page');
	}

	public function showContact()
	{
		return View::make('contact');
	}

	public function showAbout()
	{
		return View::make('about');
	}

	public function showLogin() 
	{
		return View::make('login');
	}

	public function doLogout() {
		Auth::logout();
		return Redirect::action('HomeController@showLogin');
	}

}
