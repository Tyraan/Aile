<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>最新动态-爱乐国际早教中心--亲子早教|儿童早教|ilovegym|全球最具专业的早教课程体系</title>
<meta name="keywords" content="国际早教|北京早教|早教中心|早教机构|早教加盟亲子早教|爱乐|爱乐国际早教中心|爱乐早教|早期教育|爱乐国际早教|儿童早教|早教 ">
<meta name="description" content="爱乐国际早教是全球最具专业的早教课程体系，集亲子早教、儿童早教、早期教育及幼教、早教加盟为一体的专业早教机构，30年的国际历  史，全国50家高品质中心，六大课程体系覆盖0-8岁，十万家庭的共同选择。先进的教育理念、专业的早教团队，科学的儿童课程，促进宝宝  健康成长。">
@include('newsJsCss')
</head>

<body>
<div class="boss">
@include('GeneralHeader')
  <!--通用标题-->
@include('newsTopTitle')
    
    <div class="bs_baisbj">
       <div class="tony_yong">
       <!--位置-->
       <div class="ai_weizhi">
         <ul>
           <li><img src="/templates/default/images/hoom.png"></li>
           <li><a href="/index.html">首页</a></li>
           <li>></li>
		   <!--爱乐声音-->
           			 <li><a href="/aileshengyin/index.html">爱乐声音</a></li>
			          </ul>
       </div>
       
       <!--爱乐声乐-->
       <div class="alsy_con">
            <ul>
			              <li><a href="/news/index.html">
              <img src="/templates/default/images/alsy_img1.jpg" width="136" height="165"  onmouseover="jQuery(this).attr('src','/templates/default/images/alsy_img1_1.jpg')" onMouseOut="jQuery(this).attr('src','/templates/default/images/alsy_img1.jpg')" > </a>
              </li>
			  			                 <li><a href="/huodong/index.html">
              <img src="/templates/default/images/alsy_img2.jpg" width="136" height="165"onmouseover="jQuery(this).attr('src','/templates/default/images/alsy_img2_1.jpg')" onMouseOut="jQuery(this).attr('src','/templates/default/images/alsy_img2.jpg')"> </a>
              </li>
			  			                 <li><a href="/Gymmerbuzz/index.html">
              <img src="/templates/default/images/alsy_img3.jpg" width="136" height="165"onmouseover="jQuery(this).attr('src','/templates/default/images/alsy_img3_1.jpg')" onMouseOut="jQuery(this).attr('src','/templates/default/images/alsy_img3.jpg')"> </a>
              </li>
			  			                 <li><a href="/czl/index.html">
              <img src="/templates/default/images/alsy_img4.jpg" width="136" height="165"onmouseover="jQuery(this).attr('src','/templates/default/images/alsy_img4_1.jpg')" onMouseOut="jQuery(this).attr('src','/templates/default/images/alsy_img4.jpg')"> </a>
              </li>
			  			                 <li><a href="/shunjian/index.html">
              <img src="/templates/default/images/alsy_img5.jpg" width="136" height="165"onmouseover="jQuery(this).attr('src','/templates/default/images/alsy_img5_1.jpg')" onMouseOut="jQuery(this).attr('src','/templates/default/images/alsy_img5.jpg')"> </a>
              </li>
                            
            </ul>
       </div>
       
       <div class="alsy_con1">
            <div class="alsy_con1_left">
                 <div class="alsy_con1_left_a">
                    						<div class="alsy_con1_left_a_top"><span style="font-size:14px"><span style="color:rgb(37, 37, 37); font-family:微软雅黑">Gymmy带大家探班爱乐乐享龙湖中心</span></span>&nbsp;</div>

<div class="alsy_con1_left_a_con"><a href="http://www.ilovegym.com/wzxw/1451554888.html"><img src="/uploadfiles/images/1601131809199377078zv44.jpg" style="height:225px; width:300px" /></a>

<div class="con1">爱乐乐享龙湖中心随时欢迎接小朋友和家长们！跟着Gymmy一起在全中国最棒的爱乐乐享中心愉快玩耍吧！  &nbsp; &nbsp;&nbsp;&nbsp;<br />
爱乐乐享龙湖中心<br />
电话：010-65455521<br />
北京市朝阳区朝阳北路<br />
龙湖长楹天街3层</div>
</div>
					                  </div>
                 
                 <script src="/templates/default/js/jquery-1.7.min.js" type="text/javascript"></script>
<script src="/templates/default/js/Area.js" type="text/javascript"></script>
<script src="/templates/default/js/AreaData_min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function (){
	initComplexArea('seachprov', 'seachcity', 'seachdistrict', area_array, sub_array, '44', '0', '0');
});

//得到地区码
function getAreaID(){
	var area = 0;          
	if($("#seachdistrict").val() != "0"){
		area = $("#seachdistrict").val();                
	}else if ($("#seachcity").val() != "0"){
		area = $("#seachcity").val();
	}else{
		area = $("#seachprov").val();
	}
	return area;
}

function showAreaID() {
	//地区码
	var areaID = getAreaID();
	//地区名
	var areaName = getAreaNamebyID(areaID) ;
	alert("您选择的地区码：" + areaID + "      地区名：" + areaName);            
}

//根据地区码查询地区名
function getAreaNamebyID(areaID){
	var areaName = "";
	if(areaID.length == 2){
		areaName = area_array[areaID];
	}else if(areaID.length == 4){
		var index1 = areaID.substring(0, 2);
		areaName = area_array[index1] + " " + sub_array[index1][areaID];
	}else if(areaID.length == 6){
		var index1 = areaID.substring(0, 2);
		var index2 = areaID.substring(0, 4);
		areaName = area_array[index1] + " " + sub_array[index1][index2] + " " + sub_arr[index2][areaID];
	}
	return areaName;
}
</script>

<script>
function ShowHidden()
{
 var obj = document.getElementById("seachprov");
 var txtShowHidden1 = document.getElementById("selce_02");
 var txtShowHidden2 = document.getElementById("seachcity");
 
 if (obj.value=="11")
 {

	document.getElementById( "selce_02" ).className = "abc";
	document.getElementById( "seachcity" ).className = "abc_ai_bbnl";  
 }
 
else if (obj.value=="12")
 {

	document.getElementById( "selce_02" ).className = "abc";  
	document.getElementById( "seachcity" ).className = "abc_ai_bbnl";  
 }
 
 else if (obj.value=="31")
 {

	document.getElementById( "selce_02" ).className = "abc";
	document.getElementById( "seachcity" ).className = "abc_ai_bbnl";    
 }
 
 else{
	 document.getElementById( "selce_02" ).className = "selce12"; 
	 document.getElementById( "seachcity" ).className = "ai_bbnl";  
	 }
}
</script>
  <script type="text/javascript">
	     function tj(){
			
   	        var babyname=document.getElementById("babyname").value;
			var mobile=document.getElementById("mobile").value;
		
			 var year=document.getElementById("year").value;
			 var month=document.getElementById("month").value;
			  var day=document.getElementById("day").value;
			var s_province=document.getElementById("s_province").value;
		
			var s_city=document.getElementById("s_city").value;
			var s_county=document.getElementById("s_county").value;
	 
           if( babyname=='' ){  
                alert("请输入宝宝名称!");
                    document.kechengsave.babyname.focus();
                  return false;
               }else if( year =='年' ){  
                alert("请输入出生年份!");
                    document.kechengsave.year.focus();
                  return false;
               }else if( month =='月' ){  
                alert("请输入出生月份!");
                    document.kechengsave.month.focus();
                  return false;
               }else if( day =='日' ){  
                alert("请输入出生日期!");
                    document.kechengsave.day.focus();
                  return false;
               }else if( mobile=='' ){  
                alert("请输入手机号码!");
                    document.kechengsave.mobile.focus();
                  return false;
               }else if( mobile.length!=11 ){  
                alert("请输入正确的手机号码!");
                    document.kechengsave.mobile.focus();
                  return false;
               }else if(  s_province=='省份'  ){  
                alert("请选择省份!");
                    document.kechengsave.s_province.focus();
                  return false;
               }else if(  s_city=='地级市'  ){  
                alert("请选择地级市!");
                    document.kechengsave.s_city.focus();
                  return false;
               }else if(  s_county=='预约中心'  ){  
                alert("请选择预约中心!");
                    document.kechengsave.s_county.focus();
                  return false;
               }else{
				return document.getElementById('kechengsave').submit();   
			   }
			  
	
           }
	   
	   </script>
<style>
.abc{ width:250px;}
.abc_ai_bbnl{ width:220px; font-size:12px; color:#181818; font-family:"Microsoft YaHei"; height:26px; line-height:26px;}

.selce12{ width:auto; height:38px;}
</style>




<div class="ai_boox_left">
                 <div class="ai_zx">
					 <div class="alck_ewm" id="alck_ewm1" >
				  		<img src="/templates/default/images/er_wei_ma.jpg" width="250" height="250">
			  		</div>
                    <ul>
                       <li class="ai_zxzu"><a href="#" onClick="doyoo.util.openChat('g=10047442');return false;"><img src="/templates/default/images/zx_zx.png" onMouseOver="jQuery(this).attr('src','/templates/default/images/zx_zx1.png')" onMouseOut="jQuery(this).attr('src','/templates/default/images/zx_zx.png')" ></a></li>
                       <li class="ai_zijm"><a href="#" onClick="doyoo.util.openChat('g=10047442');return false;"><img src="/templates/default/images/jm_zx.png" width="79" height="96" onMouseOver="jQuery(this).attr('src','/templates/default/images/jm_zx1.png')" onMouseOut="jQuery(this).attr('src','/templates/default/images/jm_zx.png')"></a></li>
                       <li><a href="#" onMouseOver="tcc_show()" onMouseOut="tcc_show()"><img src="/templates/default/images/saoyisao.png"></a></li>
                   </ul>
                </div>
             <div class="ai_mfzu">
               
                <div class="ai_qiehuan">
                  <a>免费试听</a>
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
                             <td width="40%">男宝宝</td>
                             <td width="10%"><input class="ai_bbxb" type="radio" name="sex" id="sex" value="女"></td>
                              <td width="66%">女宝宝</td>
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
                
 <!--获赠课程体验 end-->   
                
              
                
                
<!--城市 end-->   
<script class="resources library" src="/templates/default/js/area.js" type="text/javascript"></script>
    
 <script type="text/javascript">_init_area();</script>
</div>
    <div class="ai_beuak"></div>
    <div id="show"></div>
    
</div>
<script type="text/javascript">
var Gid  = document.getElementById ;
var showArea = function(){
	Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" + 	
	Gid('s_city').value + " - 县/区" + 
	Gid('s_county').value + "</h3>"
							}
Gid('s_county').setAttribute('onchange','showArea()');
</script>

 <!--城市 end--> 

                
          
<!--出生日期js结束-->        
                
             
             
        

                 
                 
                 
                 
            </div>
            
            <div class="alsy_con1_right">
                 <div class="alsy_con1_right_top">
                      <div class="alsy_con1_right_top_1">
                      
                      
                      
                          <form action="" method="get">
                           <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="45">日期:</td>
                                <td width="95"><label for="select3"></label>
                                  <select  class="xiala"  name="">
                                  <option value="请选择">请选择</option>
                                </select></td>
                                <td width="47">标题：</td>
                                <td width="150"><label for="textfield4"></label>
                                <input type="text" name="textfield4" id="textfield4" class="wenben"></td>
                                <td width="104" >
                                   <a href="#" class="sousuo"><img src="/templates/default/images/alsy_sousuo.jpg" width="73" height="28" ></a>
                                </td>
                            </tr>
                         </table>
                         </form>
                         
                      </div>
                      <div class="alsy_con1_right_top_2">
                           热门城市：<a href="#">北京</a><a href="#">深圳</a><a href="#">上海</a><a href="#">东莞</a><a href="#">更多></a>
                      </div>
                 </div>
                 
                 <div class="alsy_con1_right_a">
                         
                                                      <div class="boxgrid caption">
                                <img src="/uploadfiles/201603/2016032217285515971.jpg"/>
                                    <div class="cover boxcaption">
                                        <p><a href="http://www.dianping.com/shop/16975488">回龙观亲子嘉年华</a></p>
                                    </div>
                                </div>
                                                      <div class="boxgrid caption">
                                <img src="/uploadfiles/201603/2016032217300970238.jpg"/>
                                    <div class="cover boxcaption">
                                        <p><a href="http://www.ilovegym.com/index.html">2016爱乐国际新春年会</a></p>
                                    </div>
                                </div>
                                                      <div class="boxgrid caption">
                                <img src="/uploadfiles/201603/2016032217495836511.jpg"/>
                                    <div class="cover boxcaption">
                                        <p><a href="http://www.ilovegym.com/mfstlv/index.html">爱乐2016新中心comingsoon</a></p>
                                    </div>
                                </div>
                                
                             
                    </div>
                 
                 
                 
                 <div class="alsy_con1_right_b">
                      <ul>
					                         <li><a href="/wzxw/1453277791.html" class="zi">爱乐乐享南京隆重开业</a>2016-01-20</li>
						                        <li><a href="/wzxw/1453198033.html" class="zi">Gymmy的南京新家欢迎您</a>2016-01-19</li>
						                        <li><a href="/wzxw/1451554888.html" class="zi">Gymmy带大家探班爱乐乐享龙湖中心</a>2015-12-31</li>
						                        <li><a href="/wzxw/1448865895.html" class="zi">爱乐国际荣膺2015中国知名儿童教育机构品牌</a>2015-11-30</li>
						                        <li><a href="/wzxw/1447664262.html" class="zi">爱乐乐享龙湖中心即将开启欢乐预售</a>2015-11-16</li>
						                        <li><a href="/wzxw/1446449722.html" class="zi">爱乐国际早教沧州中心盛大开业</a>2015-11-02</li>
						                        <li><a href="/wzxw/1446435239.html" class="zi">爱乐早教双11真心大回馈开始啦</a>2015-11-02</li>
						                        <li><a href="/wzxw/1445843414.html" class="zi">爱乐乐享大揭秘：走心的个性化课程</a>2015-10-26</li>
						                        <li><a href="/wzxw/1445399758.html" class="zi">爱乐乐享大揭秘：不计成本的高品质教学设备</a>2015-10-21</li>
						                        <li><a href="/wzxw/1444646782.html" class="zi">爱乐乐享：新的中心，新的选择</a>2015-10-12</li>
						                        <li><a href="/wzxw/1442210774.html" class="zi">爱乐早教6周年 感恩言谢 再创辉煌</a>2015-09-14</li>
						                        <li><a href="/wzxw/1441881312.html" class="zi">爱乐早教6周年钜惠风暴</a>2015-09-10</li>
						                        <li><a href="/wzxw/1441881186.html" class="zi">爱乐国际早教荣获中国孕婴童行业最佳人气口碑品牌</a>2015-09-10</li>
						                        <li><a href="/wzxw/1441793254.html" class="zi">爱乐国际早教荣获中国孕婴童行业最佳人气口碑品牌</a>2015-09-09</li>
						                        <li><a href="http://www.ilovegym.cn/news/1441793254.html" class="zi">爱乐早教6周年钜惠风暴</a>2015-09-09</li>
						                        
                      </ul>
                 </div>
                 
                 
                 <!--分页-->
                <div class="paging">
                      <div class="paging_con">
					   <a href='/news/index.html' target='_self'>首页</a> <a href='/news/list_1.html' target='_self' style='color:#ffffff;background-image: url(/templates/default/images/paging_img2.jpg);'>1</a><a href='/news/list_2.html' target='_self'>2</a><a href='/news/list_3.html' target='_self'>3</a> <a href='/news/list_2.html' target='_self'>></a>  <a href='/news/list_3.html' target='_self'>末页</a>                            
                   </div>
               </div>
                 
            </div>
            
       </div>
    
       <div style="clear:both;"></div>
    </div>
    
</div>


</div>
</body>
</html>
