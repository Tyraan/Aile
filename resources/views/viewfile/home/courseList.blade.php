<div class="boss">
  <!--通用标题-->
  <div class="tyongtop">
    <div class="tybiaoti"><img src="/templates/default/images/s_ailikecheng.png"></div>
  </div>
  
  <div class="bs_baisbj">
    <div class="tony_yong">
      <!--位置-->
      <div class="ai_weizhi">
        <ul>
          <li><img src="/templates/default/images/hoom.png"></li>
          <li><a href="/index.html">首页</a></li>
          <li>></li>
          
          <li>爱乐课程</li>
        </ul>
      </div>
      
      <!--爱乐课程-->
      <div class="ke_boox">
        <div class="ke_right">
          <div class="kechengxuanze">
            <div class="kechengxuanze_t">

            @if ($child_month_age <1)
            您的孩子是{{ $birthday }}出生，尚未满一个月，还没有适合的课程
            @elif ($child_age<6)
            "您的孩子是{{ $birthday }}出生，现在 {{$child_age}} 岁 {{ $child_month }}个月，可以选择如下课程"
            @else 
            "您的孩子是{{ $birthday }}出生,现在满  {{ $child_age }}岁，已经可以从早教中心毕业啦，期待您的下一个小宝宝。
            @endif



          



</div>
            <div class="kechengxuanze_m">
              <div class="kechengxuanze_m_t">
                <a href="#" target="_blank">
                <img src="/templates/default/images/ke_03.jpg" width="308" height="69" alt=""></a>
 </div>
<ul>
  <!--music course-->
  @if ($music)    
  <li class="kechengxuanze_m_m_1">
    <span class="kmm1_t">
      <a href="/music/index.html"  target="_blank"><img src="/img/kechengxuanze/Kindermusik.jpg" width="277" height="252" alt=""></a></span>
      <span class="kmm1_m">
        <p class="kmm1_m_t">
          适合年龄：<a href="/music/index.html" target="_blank">{{$music_course_discription }}</a>
          <br/>
          课程名称：<a href="" target="_blank">{{$music_course_name }}</a>  </p>
          <p class="kmm1_b">  <a href="/music/index.html"  target="_blank"><img src="/templates/default/images/ke_150.png" width="124" height="34" alt=""></a> </p></span>
        </li>
  @endif



      <!--fitBaby course-->
  @if($fitbaby)
<li class="kechengxuanze_m_m_1">    
<span class="kmm1_t">
<a href="/fitbaby/index.html"  target="_blank">
<img src="/templates/default/images/kechengxuanze/Fitbaby.jpg" width="277" height="252" alt="">
</a>
</span>     
<span class="kmm1_m">  <p class="kmm1_m_t">课程名称：<a href="" target="_blank">{{ $fitbaby_course_name }}</a><br/>
          适合年龄：
<a href="/fitbaby/index.html" target="_blank">{{ $ifitbaby_course_discription }}</a></p>
<p class="kmm1_b"><a href="/fitbaby/index.html"  target="_blank"><img src="/templates/default/images/ke_150.png" width="124" height="34" alt=""></a> </p></span>
</li>  
@endif
<!--fitKid course-->
@if ( $fitkid)

  <li class="kechengxuanze_m_m_1">    
<span class="kmm1_t"> <a href="/fitkid/index.html"  target="_blank"><img src="/templates/default/images/kechengxuanze/Fitkid.jpg" width="277" height="252" alt=""></a></span>
     
<span class="kmm1_m">              <p class="kmm1_m_t">课程名称：<a href="" target="_blank">{{ $fitkid_course_name}}</a><br/>
          适合年龄：<a href="/fitkid/index.html" target="_blank">{{$fitkid_course_discription}}</a></p>
                       <p class="kmm1_b">  <a href="/fitkid/index.html"  target="_blank"><img src="/templates/default/images/ke_150.png" width="124" height="34" alt=""></a> </p></span>
</li> 
@endif       

<!--art course-->
@if ($artcourse)

<li class="kechengxuanze_m_m_1">    
<span class="kmm1_t"> <a href="/art/index.html"  target="_blank"><img src="/templates/default/images/kechengxuanze/Art.jpg" width="277" height="252" alt=""></a></span>
<span class="kmm1_m"> 
<p class="kmm1_m_t">课程名称：<a href="" target="_blank">{{$art_course_name}}</a><br/>
          适合年龄：<a href="/art/index.html" target="_blank">{{ $art_course_discription }}</a></p>
 <p class="kmm1_b">  <a href="/art/index.html"  target="_blank"><img src="/templates/default/images/ke_150.png" width="124" height="34" alt=""></a> </p></span>     
</li>
@endif


<!--CookingFun_course-->
@if ($cookingfun )
<li class="kechengxuanze_m_m_1">    
        <span class="kmm1_t"> <a href="/cookingfun/index.html"  target="_blank"><img src="/templates/default/images/kechengxuanze/CookingFun.jpg" width="277" height="252" alt=""></a></span>
     
        <span class="kmm1_m">
    <p class="kmm1_m_t">课程名称：<a href="" target="_blank">{{$cookingfun_course_name}}</a><br/>
          适合年龄：<a href="/cookingfun/index.html" target="_blank">{{ $cookingfun_course_discription }}</a></p>
          <p class="kmm1_b">  <a href="/cookingfun/index.html"  target="_blank"><img src="/templates/default/images/ke_150.png" width="124" height="34" alt=""> </a> </p></span>
</li>   
@endif  

<!--letterhand course-->
@if ($letterhand)
  <li class="kechengxuanze_m_m_1">    
   <span class="kmm1_t"> <a href="/letterland/index.html"  target="_blank"><img src="/templates/default/images/kechengxuanze/LetterLand.jpg" width="277" height="252" alt=""></a></span>
     
          <span class="kmm1_m">              <p class="kmm1_m_t">课程名称：<a href="" target="_blank">{{ $letterhand_course_name }}</a><br/>
          适合年龄：<a href="/letterland/index.html" target="_blank">{{ $letterhand_course_discription }}</a></p>
                       <p class="kmm1_b">  <a href="/letterland/index.html"  target="_blank"><img src="/templates/default/images/ke_150.png" width="124" height="34" alt=""></a> </p></span>
</li>
   @endif   

   <!--waterGym course-->
   @@if ($watergym)
   <li class="kechengxuanze_m_m_1">    
        <span class="kmm1_t"> <a href="/WaterGym/index.html"  target="_blank"><img src="/templates/default/images/kechengxuanze/shuiyu.jpg" width="277" height="252" alt=""></a></span>     
          <span class="kmm1_m">              <p class="kmm1_m_t">课程名称：<a href="" target="_blank">{{$watergym_course_name}}</a><br/>
          适合年龄：<a href="/WaterGym/index.html" target="_blank">{{$watergym_course_discription }}</a></p>
<p class="kmm1_b">  <a href="/WaterGym/index.html"  target="_blank"><img src="/templates/default/images/ke_150.png" width="124" height="34" alt=""></a> </p></span>
</li>
     
   @endif
        
        
        
</ul>
            </div>
            <div class="kechengxuanze_m_b">
              <a href="#" target="_blank"><img src="/templates/default/images/ke_03.jpg" width="308" height="69" alt=""></a>
            </div>
          </div>
          
        </div>
        
      </div>
      
      <div class="ke_left">
        <div class="hkc_lewt"></div>
        <div class="kc_tshipin">
          <div class="kc_shipin"><a href="#" onClick="tcc_show_sp()"><img src="/templates/default/images/s_shibo.png" width="274" height="158"></a></div>
          <div class="kc_fenxian">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="11%">&nbsp;</td>
                <td width="21%">分享到：</td>
                <td width="14%"><a href="#"><img src="/templates/default/images/s_weibo.png" width="29" height="24"></a></td>
                <td width="17%"><a href="#"><img src="/templates/default/images/a_weixin.png" width="26" height="22"></a></td>
                <td width="12%"><a href="#"><img src="/templates/default/images/s_guge.png" width="22" height="20"></a></td>
                <td width="25%"><a href="#"><img src="/templates/default/images/s_f.png" width="21" height="21"></a></td>
              </tr>
            </table>
          </div>
          
        </div>
        
        
        
        
        <!--获赠课程体验-->
        <div class="ai_shtai info">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <form action="/actions.php?do=kecheng" id="kechengsave" method="post" name="kechengsave">
              <input name="sub" type="hidden" value="save" />
              <tr>
                <td width="73" height="40" align="right" >宝宝名称：</td>
                <td width="72" height="40"><input type="text" class="ai_bbmc" name="babyname" id="babyname"></td>
                
              </tr>
              <tr>
                <td width="73" height="38" align="right" >宝贝性别：</td>
                <td colspan="3">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="10%" height="30" align="left" ><input name="sex" type="radio" class="ai_bbxb" id="sex" value="男" checked="checked">
                    </td>
                    <td width="14%">男</td>
                    <td width="10%"><input class="ai_bbxb" type="radio" name="sex" id="sex" value="女"></td>
                    <td width="66%">女</td>
                  </tr>
                </table>
                
              </td>
            </tr>
            <tr>
              <td width="73" height="38" align="right" >出生日期：</td>
              <td colspan="3"><select id="year" onChange="changeday()" name="year"> <option value="年">年</option></select><select id="month" name="month"  onchange="changeday()"><option value="月">月</option> </select><select id="day" name="day" ><option value="日">日</option> </select></td>
            </tr>
            <tr>
              <td width="73" height="38" align="right" >手机号码：</td>
              <td colspan="3"><input class="ai_shjh" name="mobile" id="mobile" type="text"></td>
            </tr>
            <tr>
              <td width="73" height="38" align="right" >所在城市：</td>
              <td colspan="3">
                
              <select id="s_province" class="ai_bbnl" name="seachprov"></select>
            <select id="s_city" name="homecity"  class="ai_bbnl"></select>
            
          </td>
        </tr>
        <tr>
          <td width="73" height="38" align="right" >预约中心：</td>
          <td colspan="3">
          <select id="s_county"  class="ai_shjh1" name="s_county"></select>
        </td>
      </tr>
      <tr>
        <td height="38" class="na_mfqia" colspan="4" align="center" ><input name="subsave"  type="image" onClick="return tj()" src="/templates/default/images/ai_shea.png" /></td>
      </tr>
    </form>
  </table>
  
</div>

<script class="resources library" src="/templates/default/js/area.js" type="text/javascript"></script>

<script type="text/javascript">_init_area();</script>
</div>
<div class="ai_beuak"></div>
<div id="show"></div>

</div>
</div>
</div>
</div>
<!--版权 版块-->
<div class="ai_banquan">
<div class="banqi_sj">
<div class="ke_fhtop"><a href="#"><img src="/templates/default/images/s_fhtop.png"></a></div>
</div>
</div>