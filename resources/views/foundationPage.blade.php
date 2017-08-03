<!doctype html>
<html>
<head>
    @include('GeneralHead')
    <title> @yield('title')</title>
</head>
<body>
@include('GeneralFloatbar')
<div class="head">
<div class="block">爱乐乐享 爱乐国际早教欢迎您！<a href="http://www.ilovegym.com/templates/default/newhtml/store.html"
                                         class="map">查找身边的爱乐</a></div>
</div>
@include("GeneralNavBar")
</div>

<div class="container">
    @yield('content')
</div>


@include('viewfile/HomeFooter')
@include('GeneralFooter')
</body>

</html>
<!---主页banner的滑动js-->
@include('viewfile/HomePageJS')
