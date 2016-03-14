<link type="text/css" href="/css/style10_15.css" rel="stylesheet">
 <!-- <link rel="stylesheet" type="text/css" href="/css/my.css"> -->
<link type="text/css" href="/css/new_story2.css" rel="stylesheet">
<!-- <script type="text/javascript" src="/js/zaojiao.js"></script> -->
<link type="text/css" href="/css/style_boox1.css" rel="stylesheet">
<link type="text/css" href="/css/style_index.css" rel="stylesheet">
<!-- <script src="/js/jquery-1.4.2.min.js" type="text/javascript"></script> -->
<!-- <script src="/js/tongyign.js"type="text/javascript"></script> -->
<link rel="shortcut icon" type="image/x-icon" href="/images/aileguoji.ico" media="screen" />
<!-- <script type="text/javascript" src="/js/date1.js" ></script> -->
<!-- <script type="text/javascript" src="/js/iscroll.js" ></script>
<script src="/js/jquery-1.7.min.js" type="text/javascript"></script> -->
<!-- <script src="/js/Area.js" type="text/javascript"></script>
<script src="/js/AreaData_min.js" type="text/javascript"></script> -->

<script type="text/javascript" charset="utf-8" src="http://lead.soperson.com/20000301/10045318.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?61de223b614ba7d411dac108b01a95fd";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<style>
.abc{ width:250px;}
.abc_ai_bbnl{ width:220px; font-size:12px; color:#181818; font-family:"Microsoft YaHei"; height:26px; line-height:26px;}

.selce12{ width:auto; height:38px;}
</style>
<script type="text/javascript">
/*$(function(){
	$('#beginTime').date();
	$('#endTime').date({theme:"datetime"});
});*/
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?287002be1059509e17e9225067ddb064";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>


</head>

<body  onload="setup()">
  
<!-- <script type="text/javascript" src="/js/my.js"></script> -->
<div class="kc_beija">
<script type="text/javascript">
function getb($birthday){
  
        var   r   =   $birthday.match(/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/);     
        if(r==null)return   false;     
        var   d=   new   Date(r[1],   r[3]-1,   r[4]);     
        if   (d.getFullYear()==r[1]&&(d.getMonth()+1)==r[3]&&d.getDate()==r[4])   
        {   
              var   Y   =   new   Date().getFullYear();   
              return("年龄   =   "+   (Y-r[1])   +"   周岁");   
        }   
        return("输入的日期格式错误！");   


}
</script>



<script type="text/javascript">
$(document).ready(function(){
	
	$(".def-nav,.info-i").hover(function(){
		$(this).find(".pulldown-nav").addClass("hover");
		$(this).find(".pulldown").show();
	},function(){
		$(this).find(".pulldown").hide();
		$(this).find(".pulldown-nav").removeClass("hover");
	});
	
});

//二维码弹出
function tcc_show()
{
       var yincang=document.getElementById("alck_ewm1");
       if(yincang.style.display=='block')
              yincang.style.display='none';//block表示显示
       else
               yincang.style.display='block';//none表示隐藏
}
function tcc_show1()
{
       var yincang=document.getElementById("alck_ewm2");
       if(yincang.style.display=='block')
              yincang.style.display='none';//block表示显示
       else
               yincang.style.display='block';//none表示隐藏
}
//弹出视频
function tcc_show_sp()
{
       var yincang=document.getElementById("alkc_sp_da");
       if(yincang.style.display=='block')
              yincang.style.display='none';//block表示显示
       else
               yincang.style.display='block';//none表示隐藏
}
</script>



 <script>
$(document).ready(function(){

	$('#subform').click(function(){
		$('#light').css('display','block');
		
	})
	});
</script>

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
function yanzhengMa(){
	var src = "/include/verify.php?t=admin&g="+Math.random() ;
	jQuery("#verify").attr('src',src) ;
}
jQuery(document).ready(function(){
	yanzhengMa() ;
})
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