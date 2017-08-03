<!DOCTYPE HTML5>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--如果使用Ajax提交POST表单,需要用到csrf--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>test page</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script type="text/javascript" src = "/js/jquery-3.1.1.min.js"></script>
     <script type="text/javascript" src = "/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="/js/test.js" ></script>
</head>
<body>
<div class="page-header"></div>
<div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <h1>正则表达式练习</h1>
            </div>  
  <h4>
      <?php
      $matches=[];

      $pattern = "/<img [^>]+ src=[^>]+\/(([[:alnum:]]+)\.(png|gif|jpg|bmp))[^>]+>/";
      $content = <<<POSTCONTENT
<p>some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;<br></p><p><br></p><p><img alt="QQ截图20170425110715.png" src="/image/temp/yLzrj20170802.png" width="550" height="517"><br></p><p>some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;<br></p>
<p>some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;<br></p><p><br></p><p><img alt="QQ截图20170425110715.png" src="/image/temp/yLzrj20173231.png" width="550" height="517"><br></p><p>some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;<br></p>
<p>some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;<br></p><p><br></p><p><img alt="QQ截图20170425110715.png" src="/image/temp/yLzrj2017312211.png" width="550" height="517"><br></p><p>some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;some test test&nbsp;<br></p>
POSTCONTENT;
      preg_match_all($pattern, $content, $matches, PREG_OFFSET_CAPTURE);
      var_dump($matches);
      $arr =[];
      foreach ( $matches[0] as $ms){
          $arr[]=get_src($ms[0]);
      }
      var_dump($arr);
      $drr= [];
      foreach ($arr as $a){
          $drr[] = get_img_name($a[0]);
      }
      var_dump($drr);
      function get_src($somestr){
          $pattern = '/src="[^.]+[\.](png|jpg|gif|bmp)"/';
          preg_match($pattern, $somestr, $m);
          return $m;
      }
      function get_img_name($somestr){
          $arr = explode('/', $somestr);
          return end($arr);
        }
      ?>
</h4>
        </div>
    </nav>
</div>

<div>
    <p><h3>文件判断</h3></p>
    @foreach($allPics as $pic)
        <p>{{ $pic }}</p>
    @endforeach

</div>
<div>
    <p>
        {{ $validator or 'no  validator' }}
    </p>
    <p>
        {{  $error  or ' no error'   }}
    </p>
</div>




</body>
</html>
