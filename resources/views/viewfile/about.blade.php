<!doctype html>
<html>
<head>
    {{-- 通用页面头 --}}
    @include("GeneralHeader")
    {{-- 通用js 与css 引入 --}}
    @include("GeneralCSSandJs")
</head>
<body>
       {{-- 页面通用浮动条 --}}
    @include("GeneralFloatbar")
        {{-- 通用页面头 --}}
    @include("GeneralPageHeader")
    @include("viewfile/AboutIntro")
    @include("viewfile/AboutHistory")
    @include("viewfile/AboutBrand")
    @include("viewfile/AboutIdea")
    @include("HonorAward")

    @include("GeneralPageBottom")
    @include("GeneralFooter")   

</html>
