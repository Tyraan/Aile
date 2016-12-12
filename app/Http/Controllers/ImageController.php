<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImageController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  file name,string
     * @return array [thumbnailpicname,picturename]
     */
    public function storeWithThumbnail(Request $request,$name)
    {
        $allowed_extensions = ["png", "jpg", "gif"];
        $file=$request->file($name);
        $randomstr = random(5, '123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ');
        $newname  = date('Ymd',time()).$randomstr."."$file->getClientOriginalExtension();
        $thumbname = 'thumbnail_'.$newname;

        if($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(),$allowed_extensions))
        {
            return['error'=>"图片后缀必须是：png，jpg 或者 gif"];
        }
        Image::make($file)->resize(200,200)->save('public/image/banner/'.$thumbname);
        Image::make($file)->save('public/image/banner/'.$newname);

        return [$thumbname,$newname];
    }
    /**
     * Remove the specified resource from storage
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function removepicture($id)
    {

    }