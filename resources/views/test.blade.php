<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <title>ueditor demo</title>

</head>

<body>
<script type="text/javascript" src="/js/jquery-2.2.2.js"></script>  
  <script type="text/javascript" charset="utf-8" >
  $(document).ready(function(){
    $('#inputimage').click(function(){
    
    var requestData ={"action": "listimage", "start": 0, "size": 20};
    $.get('/UEditor/php/controller.php',requestData,function(data){       
                
         var returnedObj =  eval("("+data+")");         
          if(returnedObj.state == "SUCCESS"){            
            $('#imageList').empty();
            var htmlinput = "";
            //var imageList = eval("("+returnedObj.list+")");
            $.each(returnedObj.list,function(key,value){              
               htmlinput+= "<input type='hidden' name='image[]' value="+value+">"
             });
            $('#imageList').html(htmlinput);
          }
         });

    });
    });

    </script>
    {{ var_dump($name) }}

    <form action="{{ URL('/test' )}}" method="post">
     {!! csrf_field() !!}
        <!-- 加载编辑器的容器 -->
        <script id="container" name="content" type="text/plain">
            
        </script>

        <div id = "imageList" >
        </div>


        <input type="button" id="inputimage" name="imageinput" value="试试获得图片列表">        
        <input type="submit" value="提交" > 



    </form>
    <!-- 配置文件 -->
    <script type="text/javascript" src="/UEditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/UEditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var editor = UE.getEditor('container');
    </script>

</body>

</html>