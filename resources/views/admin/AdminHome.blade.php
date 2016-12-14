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
    <div class="show-bannerimage">
    @if(isset($pictures))
        @foreach ($pictures as $pic)

            <img src="{{ '/image/banner/'.$pic->thumbnail }}" />
        @endforeach
    @endif
    </div>

    <div class="imageform">

        {!! Form::open(['url'=>'admin/banner','id'=>'imageForm']) !!}
        {!! Form::label('选择要上传的 banner图 ')!!}
        {!! Form::file('image',$attributes=['type'=>'file','class'=>'btn btn-primary','buttonName'=> "btn-primary"])!!}
        <button type="button" class ="btn btn-success btn-lg" onClick="sendImage()" value=""> 上传该图片 </button>
        {!! Form::close() !!}
    </div>
</div>
</body>
</html>