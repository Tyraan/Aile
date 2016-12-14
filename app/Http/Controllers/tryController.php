<?php

namespace App\Http\Controllers;
use App\Banner;
use Illuminate\Http\Request;
use Input;


use App\Http\Controllers\Controller;
use App\Http\Controllers\BannerController;

class tryController extends Controller
{
    use \App\Http\Controllers\Traits\ImageTrait;

    public function index()
    {
        
        return view("test",['name' => "index"]);
    }   
    public function anyTest($id)
    {
        return view("test");

    }

    public function anyIndex(Request $request)

    {
        $input = Input::all();   
        return view("test",['name'=>$input]);

    }
    public function test(Request $request){
        return 0;

    }

    public function getTestload(Request $request){
    $the_poem = "Beauty queen of only eighteen,
She had some trouble with herself,
He was always there to help her,
She always belonged to someone else,
I drove for miles and miles,
And wound up at your door,
I've had you so many times but somehow I want more,
I don't mind spending everyday,
Out on your corner in the pouring rain.
Look for the girl with the broken smile,
Ask her if she wants to stay a while.
And she will be loved,
She will be loved.
Tap on my window knock on my door,
I want to make you feel beautiful.
I know I tend to get so insecure,
It doesn't matter anymore.
It's not always rainbows and butterflies,
It's compromise that moves us along.
My heart is full and my door's always open,
You can come anytime you want.
I don't mind spending everyday,
Out on your corner in the pouring rain.
Look for the girl with the broken smile,
Ask her if she wants to stay a while.
And she will be loved,
She will be loved.
I know where you hide,
Alone in your car.
Know all of the things that make you who you are,
I know that goodbye means nothing at all,
Comes back and begs me to catch her every time she falls";
        $str_poem = str_replace(array(',','.' ), ',', $the_poem);
        $poem_arr = explode(',', $str_poem);
        $return_poem = $request->session()->get('poem',0);
        if($return_poem >(sizeof($poem_arr)-1)){ $return_poem = 0;}
        $request->session()->put('poem',$return_poem+1);
        return $poem_arr[$return_poem];



}


    public function postUpdate(Request $request){



        return response()->json(['status' => 'img saved', 'action' => 'refresh table']);

    //
    }
}
