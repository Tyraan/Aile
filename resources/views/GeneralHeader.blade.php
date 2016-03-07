
<div class="sy_top">
   <div class="sy_top1">
    <div class="hd-main clearfix" id="header">
        <div class="sy_top2">
           <ul>
              <li class="ai_yiwen"><a target="_blank" href="http://www.kindermusik.com/ ">English</a></li>
              <li class="ai_shu1">&nbsp;|&nbsp;</li>
              <li class="ai_sousuo1"><a href="/findus/index.html">查找身边的爱乐</a></li>
              <li class="ai_sousuo"></li>
              <li class="ai_shu1">&nbsp;|&nbsp;</li>
              <li class="ai_danhua">400-688-2011</li>
              @if (Auth::check())
              <li>welcom {{ Auth::user()->name }}</li>
              <li><a href="{{ URL('auth/logout')}}">登出</a></li>
              @else   
              <li><a href= "{{ URL('auth/login') }}" >登录</a></li>
               <li> <a href="{{ URL('auth/register') }}" >注册</a>
              @endif
              <li>爱乐乐享 爱乐国际早教欢迎您！&nbsp;</li>
              <br style=" clear:both;" />
           </ul>
         </div>
        <div class="navs sy_nav sy_nav1">
            <a class="def-nav def-nav2 naeuye1" href="/index.html"></a>
            <a class="def-nav def-nav1 naeuye2" href="/ourstory/index.html"></a>
            <div class="def-nav current has-pulldown-special">
                <a class="pulldown-nav  def-nav1 naeuye3" href="/course/index.html"></a>
                <div class="pulldown app-url">
                    <div class="content">                    
                         <div class="suen_sbea">
                        <a class="li disk ciauy" href="/music/index.html">
                            <span class="icon"><img src="/img/kecheng1_01.png" /></span>
                            <span class="text">Kindermuisk课程</span>                        </a>
                        <a class="li tongxunlu" href="/fitbaby/index.html">
                            <span class="icon"><img src="/img/kecheng1_02.png" /></span>
                            <span class="text">幼儿体适能</span>
                        </a>
                        <a class="li xiangce" href="/fitkid/index.html">
                            <span class="icon"><img src="/img/kecheng1_03.png" /></span>
                            <span class="text">儿童体适能</span>
                        </a>
                        <a class="li wenzhang" href="/art/index.html">
                            <span class="icon"><img src="/img/kecheng1_04.png" /></span>
                            <span class="text">艺术课程</span>
                        </a>
                        <a class="li note" href="/cookingfun/index.html">
                            <span class="icon"><img src="/img/kecheng1_05.png" /></span>
                            <span class="text">厨趣课程</span>
                        </a>
                        <a class="li duanxin" href="/letterland/index.html">
                            <span class="icon"><img src="/img/kecheng1_06.png" /></span>
                            <span class="text">英语课程</span>
                        </a>
						                <a class="li duanxin" href="/watergym/index.html">
                            <span class="icon"><img src="/img/kecheng1_07.png" /></span>
                            <span class="text">水育课程</span>
                        </a>
                       </div>
                    </div>              
                </div>
            </div>            
           <a class="def-nav def-nav1 naeuye4" href="/ilovegym/index.html"></a>
           <a class="def-nav def-nav1 naeuye5" href="/shunjian/index.html"></a>
           <a class="def-nav def-nav1 naeuye6" href="/ailecity/index.html"></a>
           <a class="def-nav def-nav1 naeuye7" href="/joinus/index.html"></a>           
        </div>        
        <div class="sy_logo"><a href="/index.html"></a></div>
        
    </div>
</div>
</div>
<!--top logo nav---end-->


