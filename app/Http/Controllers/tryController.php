<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

class tryController extends Controller
{
    
    public function index()
    {
        
        return view("test",['name' => "index"]);
    }   
    public function anyTest($id)
    {
        return view("test",['name' => "anyTest"."$id"]);

    }

    public function anyIndex(Request $request)
    {   
        return view("test",['name' => var_dump($request)]);

    }
    public function test(Request $request){


    }



}
