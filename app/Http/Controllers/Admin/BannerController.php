<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Banner;
use App\Picture;
use Redirect, Input, Response;


/*
 * Banner对应首页的banner显示图，Banner Object 有且只有一个 id =1；
 * 每个banner图 对应一个 picture object ，picture object 和Banner Object 是多对一关系，所有增删改查均是在
 * 对Banner object 下的picture Object 操作。
 * */

class BannerController extends Controller
{
    use \App\Http\Controllers\Traits\ImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //首页的banner只有一个，所以只需要创建一个banner对象
        $banner = Banner::firstOrCreate(['id' => '1']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //banner添加图片
        $banner = Banner::firstOrCreate(['id' => '1']);
        $file = $request->file('image');
        if(!$file->getClientOriginalExtension() ){ return "error";}
        $arr  = $this->storeWithThumbnail($request,'image');
        $newname = $arr[1];
        $thumbname =$arr[0];

        $picture =new Picture([
            'location' =>$newname,
            'thumbnail'=>$thumbname,
        ]);
        $banner->pictures()->save($picture);
        $picList = $banner->pictures();
        return response()->json(
            [ 'status'=>'succecess',
                'action'=>'refresh',
                'picList'=>$picList,
                'newname'=>$newname,
                'thumbnail'=>$thumbname
            ]
        );
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //增删改图片

    }

    /**
     * Remove the specified resource from storage.
     * 删除
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Picture::destory($id);


    }
}
