<?php namespace App\Http\Controllers;
	  use Illuminate\Http\Request;
      use App\Banner;
	        



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
        $pictures = Banner::firstOrNew(['id'=>1])->pictures;
		return view('home',['session'=>session(),'pictures'=>$pictures]);

	}

	public function getStory()
	{
		return view('viewfile/home/story')->with('session',session());
	}

	public function getCourse()
	{
		return view('viewfile/home/course');
	}

	public function getCourselist(Request $request)
	{   

		include(app_path() . '\Function\courseFunction.php');
		$birthday = $request->input('birthday','2016-3-17');
		$child_age = floor((time()-strtotime($request->input('birthday','2016-3-17')))/31104000);
		$child_month_age = floor((time()-strtotime($request->input('birthday','2016-3-17')))/2592000);


		$child_month = $child_month_age %12 ;


		$art = ArtCourse($child_month_age);
		$music = MusicCradleCourse($child_month_age);
		$fitbaby = FitBabyCourse($child_month_age);
		$fitkid = FitKidCourse($child_month_age);
		$cookingfun = CookingFunCourse($child_month_age);
		$letterhand = LetterLandCourse($child_month_age);
		$watergym  = WaterGymCourse($child_month_age);


		$arr = [
				'courseList'=> True,
				'birthday'=>$birthday,
				'child_age'=> $child_age,
				'child_month_age' =>$child_month_age,
				'child_month' => $child_month,
				'art'            => $art,
				'music' => $music ,
				'fitbaby' => $fitbaby,
				'fitkid'  => $fitkid,
				'cookingfun' => $cookingfun,
				'letterhand' => $letterhand,
				'watergym'	=> $watergym
		];
		return view('viewfile/home/course',$arr);


	}
	


}



 