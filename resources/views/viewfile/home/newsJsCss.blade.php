<link rel="shortcut icon" type="image/x-icon" href="/templates/default/images/aileguoji.ico" media="screen" />
<link type="text/css" href="/templates/default/css/style_index.css" rel="stylesheet">
<link type="text/css" href="/templates/default/css/style_xd.css" rel="stylesheet">
<link type="text/css" href="/templates/default/css/style_boox.css" rel="stylesheet">
<style>
/* boxgrid */
.boxgrid{width:228px;height:151px; float:left;overflow:hidden;position:relative; margin-right:8px;}
.boxgrid_h3{color:#FFF; font-size:14px; font-weight:bold; text-align:center; line-height:30px;  width:255px; height:30px;}
.boxgrid img{position:absolute;top:0;left:0;border:0;}
.boxgrid p{padding:0 10px; line-height:35px; color:#fff;text-align:center; font-size:14px;width:192px;}
.boxgrid p a{ color:#fff; width:192px; line-height:34px; font-size:14px;}		
.boxcaption{float:left;position:absolute; height:100px;width:100%; background-image:url(/templates/default/images/jcsj_sp_bg5.png);height:151px; color:#fff;} 
.captionfull .boxcaption{top:260px;left:0px;}
.caption .boxcaption {top:200px;left:0px;}

</style>
<script src="/templates/default/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="/templates/default/js/tongyign.js"type="text/javascript"></script>
<script src="/templates/default/js/xd_web.js"type="text/javascript"></script>
<!--下拉文字-->
<script type="text/javascript">
$(document).ready(function(){
	//Caption Sliding (Partially Hidden to Visible)
	$('.boxgrid.caption').hover(function(){	   
		$(".cover", this).stop().animate({top:'117px'},{queue:false,duration:350});
		$(".boxgrid_h3").hide();
	}, function() {
		$(".cover", this).stop().animate({top:'151px'},{queue:false,duration:160});
		$(".boxgrid_h3").show();
	});	
});
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
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?287002be1059509e17e9225067ddb064";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<link type="text/css" href="/templates/default/css/style10_15.css" rel="stylesheet">