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
		$birthday = $request->input('birthday','2016-3-17');
		$child_age = floor((time()-strtotime($request->input('birthday','2016-3-17')))/31104000);
		$child_month_age = floor((time()-strtotime($request->input('birthday','2016-3-17')))/2592000);

		$music_course_content= MusicCradleCourse($child_month_age); //
		$fitbaby_course_content = FitBabyCourse($child_month_age);  //
		$FitKid_course_content = FitKidCourse($child_month_age); //
		$Art_course_content = ArtCourse($child_month_age);       //
		$CookingFun_course_content = CookingFunCourse($child_month_age);//
		$LetterLand_course_content = LetterLandCourse($child_month_age); //
		$WaterGym_course_content = WaterGymCourse($child_month_age); //




		return view('viewfile/home/courseList')->with('')
	}
	


}



 