<!doctype html>
<html>
<head>
    @include('GeneralHead')
</head>
<body>
    @include('GeneralFloatbar')
<div class="head">
    <div class="block">爱乐乐享 爱乐国际早教欢迎您！<a href="http://www.ilovegym.com/templates/default/newhtml/store.html"
                                         class="map">查找身边的爱乐</a></div>
</div>
    @include("GeneralNavBar")
    <div class="banner">
        <div class="frame">
        @foreach($pictures as $pic)
            <div class="child"><a href="{{ $pic->link }}"><img alt="爱乐乐享" src="{{ $pic->getUrl() }}"/></a>
            </div>
        @endforeach
    </div>
    <div class="nav">
        @foreach($pictures as $pic)
            <a href="javascript:;"></a>
        @endforeach
    </div>
</div>
    @include('viewfile/HomeVideo')
    @include('viewfile/HomeJoinFind')
    @include('viewfile/HomeAdvertise')
    @include('viewfile/HomeEvent')
    @include('viewfile/HomeFooter')
    @include('GeneralFooter')
</body>
</html>
    <!---主页banner的滑动js-->
    @include('viewfile/HomePageJS')
