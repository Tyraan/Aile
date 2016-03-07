<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Center;
use App\News;
use Redirect, Input, Auth,Storage;


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
            'supervisor' => 'required|max:255',            
        

         ]);


         //储存数据
         $center = new Center;
         $center->name = $request->input('name');
         $center->intro = $request->input('intro');
         $center->supervisor = $request->input('supervisor');
         $newsId = $request->input('news');         
         $center->save();


        //储存关系表 
        if(!empty($newsId && is_array($newsId))){
            foreach ( $newsId as $news ) {
                $center->news()->attach($news); 
            }            
        }
          
        return $this->index();    
    
    }



    /**
     * Display the specified resource.    
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return view('viewfile.center.centerShow')->withCenter(Center::find($id));

    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
         return view('viewfile.center.centerEdit',['news'=> News::all(),"center" =>Center::find($id),]);
           
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
        $center  = Center::find($id);
        $destinationPath = "app/".$id;

        //更新由edit 视图传来的函数
        $this->validate($request ,[
            "name" =>"required",
            "intro" =>"required",
            "supervisor"=>"required" ]);

        $picture = "";

        if(Input::hasFile('banner'))
        {
            $file = Input::file('banner');

            if($file->isValid())
           {
                $originalPicture=$destinationPath.$center->picture;

                if(Storage::disk('local')->exists($originalPicture))
                    {  
                    Storage::delete($originalPicture);
                    }  

            }

            $filename = $file->getClientOriginalName();
            $extension = $file -> getClientOriginalExtension();
            $picture = sha1($filename . time()) . '.' . $extension;        
            $request->file('banner')->move($destinationPath,$picture);
        } 
       
        /* 
        $center->news()->sync($request->news);         
        $input = Input::except(['_method', '_token','banner','news']);
        $input['banner'] = $picture;        
        */ 
        $input = Input::except(['_method', '_token','banner']);
        $input['banner']= $destinationPath.$picture;
        if ($center->update($input))           
        {     
            return Redirect::to('center');
            } else {
            return Redirect::back()->withInput()->withErrors('更新失败！');
        }
    }

    /**
     * Remove the specified resource from storage.     
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {

        //删除中心
        $comment = Comment::find($id);
        $comment ->delete();
        return Redirect::to('center');
    }
    
}
