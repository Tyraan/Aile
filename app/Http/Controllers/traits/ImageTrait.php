<?php
trait ImageTrait
{
    /**
     * Store a newly created resource in storage.

     * @param  \Illuminate\Http\Request  $request
     * @param  file name,string
     * @return array [thumbnailpicname,picturename]
     */
    function storeWithThumbnail(Request $request,$name)
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

    function removeWithThumbnail(){

    }
}