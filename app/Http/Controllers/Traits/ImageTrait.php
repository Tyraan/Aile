<?php
namespace  App\Http\Controllers\Traits;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Storage;

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
        $randomstr = str_random(5);
        $newname  = $randomstr.date('Ymd',time()).".".$file->getClientOriginalExtension();
        $thumbname = 'thumbnail_'.$newname;
        if($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(),$allowed_extensions))
        {
            return['error'=>"图片后缀必须是：png，jpg 或者 gif"];
        }
        Image::make($file)->resize(160,160)->save(public_path().'/image/banner/'.$thumbname);
        Image::make($file)->save(public_path().'/image/banner/'.$newname);
        return [$thumbname,$newname];
    }

    function removeExistPicturesFile($name){
        $thumbname = 'thumbnail_'.$name;
        $path = join(DIRECTORY_SEPARATOR,['image','banner',$name]);
        $thumbpath = join(DIRECTORY_SEPARATOR,['image','banner',$thumbname]);
        if(is_file($path)){
            Storage::delete(
                [$path,
                $thumbpath]
            );
        }
    }

    function storeOnePicture(Request $request, $name){

    }



}