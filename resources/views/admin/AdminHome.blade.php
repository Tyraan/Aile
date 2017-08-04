<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
  <script type="text/javascript" src = "/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src = "/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/sendImage.js"></script>


    {{--如果使用Ajax提交POST表单,需要用到csrf--}}
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>后台管理页</title>
</head>
<body>
<div class="main-pageadmin">

    <p> 首页的banner控制 </p>
    <div class="container show-bannerimage" >
        <div class ="row" id = "showbanner" >
    @if(isset($pictures))
        @foreach ($pictures as $pic)
            <div class="col-md-4" id={{ "showpic".$pic->id }} >
            <img  class ="thumbnail" id={{ "pic".$pic->id }} src={{ "/image/banner/".$pic->thumbnail }} />
            <lable>图片链接：{{ $pic->link }}</lable>
            <button type = "button" class = 'btn btn-small' onClick ={{ "deleteImage(".$pic->id.")" }} value={{ $pic->id }}>删除该banner图</button>
            </div>
        @endforeach
        </div>
    @endif
    </div>
    <div class="imageform">
        {!! Form::open(['url'=>'admin/banner','id'=>'imageForm']) !!}
        {!! Form::label('选择要上传的 banner图 ')!!}
        {!! Form::file('image',$attributes=['type'=>'file','class'=>'btn btn-primary','buttonName'=> "btn-primary"])!!}
        <div class="input-group">
            <span class="input-group-addon">输入banner图的网址</span>
            <input type="text" class="form-control" placeholder="此处填入对应网址" name="bannerhref">
        </div>
        <button type="button" class ="btn btn-success btn-lg" onClick="sendImage()" value=""> 上传该图片 </button>
        {!! Form::close() !!}
    </div>
</div>
        <div class="item">
            <h3>
            <a href="/admin/newseditor">新闻编辑器</a>
            </h3>
            <>
                @if( isset($news))
                @foreach($news as $new)
                <li>{{ $new->caption }}</li>
                @endforeach
                @endif
            </>
        </div>



</body>
</html>