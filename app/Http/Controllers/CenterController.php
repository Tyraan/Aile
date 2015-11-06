<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Center;
use App\News;

use Redirect, Input, Auth;
class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('viewfile.center.centerAdmin')->with('centers',Center::all());
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewfile.center.centerCreate')->with('news',News::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //储存  提交的新建的中心 到数据库
         $this->validate($request, [
            'name'   => 'required|unique:center|max:255',
            'intro'  => 'required|max:511',
            'supervisor' =>'required|max:255',            
        ]);


         //储存数据
         $center = new Center;
         $center->name = $request->input('name');;
         $center->intro= $request->input('intro');
         $center->supervisor = $request->input('supervisor');

         $newsId= $request->input('news');
         $center->save();

         //储存关系表
        $center->news()->attach($newsId);
        return $this->index();
        
         


         // if(!empty($news && is_array($news))){
         //    foreach ( $news as $new ) {
         //        $center->news()->attach($new); 
         //    }            
         // }

        
        
        }
        
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('centerShow')->withCenter(Center::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('centerEdit')->withCenter(Center::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.     
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //



    }
}
