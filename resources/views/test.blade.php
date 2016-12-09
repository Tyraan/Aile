<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--如果使用Ajax提交POST表单,需要用到csrf--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>test page</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href ="/css/test.css"> 
     <script type="text/javascript" src = "/js/jquery-3.1.1.min.js"></script>
     <script type="text/javascript" src = "/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="/js/test.js" ></script>
   
</head>
<body>
<div class="form">
{!! Form::open(['url'=>'test/update','id'=>'imageForm']) !!}
{!! Form::label('选择要上传的 banner图 ')!!}
{!! Form::file('image',$attributes=['type'=>'file','class'=>'btn btn-primary','buttonName'=> "btn-primary"])!!}
<button type="button" class ="btn btn-success btn-lg" onClick="sendImage()" value=""> 上传该图片 </button>
{!! Form::close() !!}
</div>


</body>
</html>
</script>