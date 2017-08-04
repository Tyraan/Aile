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
<div class="home2 show">
@yield('content')
</div>

@include('GeneralFooter')
</body>
</html>
