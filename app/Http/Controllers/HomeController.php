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

	    $child_month = $child_month_age - $child_age*12;
	    $music = true;



	    if($child_month_age>0 && $child_month_age<=12){   	
        $music_course_discription = '零至一周岁';
        $music_course_name = 'Level 1 Music Cradle';
        }
    	elseif($child_month_age>13 && $child_month_age<=18){
            $music_course_discription = "一岁至一岁半";
            $music_course_name = "Level 2 Rock with Music";          	

   		}
    
   		elseif($child_month_age>19 && $child_month_age<=26){
       		 $music_course_discription = "一岁半至两岁零二个月";
       		 $music_course_name = 'Level 3 Music Path';
    	}
  		elseif($child_month_age>27 && $child_month_age<=36){
    	    $music_course_discription = '两岁二个月至三岁';
    	    $music_course_name = "Level 4 Music Parade";
        }
        elseif($child_month_age>37 && $child_month_age<=60){
        
            $music_course_discription = "三岁至五岁";
            $music_course_name = "Level 5 Music All Around";
        }
        else{    
    	$music = false;    
    }-

	    

        $fitbaby
	    $fitbaby_course_name
	    $fitbaby_course_discription

	    $fitkid
	    $fitkid_course_name
	    $fitkid_course_discription

	    $art
	    $art_course_name
	    $art_course_discription

	    $cookingfun
	    $cookingfun_course_name
	    $cookingfun_course_discription

	    $letterland
	    $letterland_course_name
	    $letterland_course_discription

	    $watergym
	    $watergym_course_name
	    $watergym_course_discription


		return view('viewfile/home/courseList')->with('')
	}
	


}



 