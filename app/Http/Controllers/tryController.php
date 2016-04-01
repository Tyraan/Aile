<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Input;

use App\Http\Controllers\Controller;

class tryController extends Controller
{
    
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


    }



}
