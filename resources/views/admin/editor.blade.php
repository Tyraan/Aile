<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <script type="text/javascript" src="/js/editor/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="/js/editor/module.min.js"></script>
    <script type="text/javascript" src="/js/editor/hotkeys.min.js"></script>
    <script type="text/javascript" src="/js/editor/uploader.min.js"></script>
    <script type="text/javascript" src="/js/editor/simditor.min.js"></script>
    <link rel="stylesheet" href="/css/simditor.css" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script rel="stylesheet" type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <title></title>
</head>
<body>
<div>
    <form action="{{ url('/admin/newseditor') }}" name="news_form" method="post">
    <div class="input-group">
        <span class="input-group-addon">文章标题</span>
        <input type="text" class="form-control" name="caption">
    </div>
    <textarea id="editor" placeholder="仅限chrome和firefox浏览器下可粘贴图片" autofocus name="content"></textarea>
    <script type="text/javascript">
        var editor = new Simditor({
            textarea: $('#editor'),
            pasteImage:true,
            defaultImage: '/image/footer.png',
            upload:{
                url:'/admin/newseditor/image',
                connectionCount:5,
                leaveConfirm: 'Uploading is in progress, are you sure to leave this page?'
            }
        });
    </script>
        <input id="fat-btn" class="btn btn-primary btn-lg" data-loading-text="提交中..."
                type="submit" form="news_form"style="float:right" > 提交文章
        </input>
    </form>

</div>


</body>
</html>