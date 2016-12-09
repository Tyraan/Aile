<?php

namespace App\Http\Controllers;

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
        $banner = App\Banner::firstOrCreate(['id' => '1']);

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
        $allowed_extensions = ["png", "jpg", "gif"];
        $banner = App\Banner::firstOrCreate(['id' => '1']);
        $file=$request->file('picture');
        $randomstr = random(5, '123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ');
        $newname  = date('Ymd',time()).$randomstr."."$file->getClientOriginalExtension();
        $thumbname = 'thumbnail_'.$newname;
        if($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(),$allowed_extensions)){
            return['error'=>"图片后缀必须是：png，jpg 或者 gif"];
        }
        Image::make($file)->resize(200,200)->save('public/image/banner/'.$thumbname);
        Image::make($file)->save('public/image/banner/'.$newname);

        $picture =new App\Picture([
            'location' =>$newname,
            'thumbnail'=>$thumbname,
        ]);
        $banner->pictures()->save($picture);
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
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
