<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{

		//$this->middleware('auth');

	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('main')->with('session',session());
	}

	public function getStory()
	{
		return view('viewfile/home/story')->with('session',session());
	}

	public function getCourse()
	{
		return view('viewfile/home/course');
	}

	public function postCourse(Request $request)
	{
		return view('viewfile/home/course');
	}

	


}



 