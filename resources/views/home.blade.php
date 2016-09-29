<!doctype html>
<html>
    {{-- 通用页面头 --}}
    @include("GeneralHead")   
   
<body>
    {{-- 页面通用浮动条 --}}
    @include("GeneralFloatbar")
    {{-- 通用页面头 --}}
    @include("GeneralPageHeader")
    {{-- 通用页面导航栏 --}}
    @include("GeneralNavbar")
    {{-- 首页展示栏 --}}
    @include("viewfile.HomeBanner")
    {{-- 首页视频栏 --}}
    @include("viewfile.HomeVideo")
    {{-- 首页加入我们栏  --}}
    @include("viewfile.HomeJoinFind")
    {{-- 首页广告栏  --}}
    @include("viewfile.HomeAdvertise")
    {{-- 首页新闻栏 --}}
    @include("viewfile.HomeEvent")
    {{-- 首页页脚 --}}
    @include("viewfile.HomeFooter")
    {{-- 通用页脚 --}}
    @include("GeneralFooter")
</body>
</html>
