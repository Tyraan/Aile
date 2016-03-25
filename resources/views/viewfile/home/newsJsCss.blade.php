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

<!--出生日期js开始-->        
<script type="text/javascript" language="javascript">
                            var curdate = new Date();
                            var year = document.getElementById("year");
                            var month = document.getElementById("month");
                            var day = document.getElementById("day");
                            //绑定年份月分的默认
                            function add() {
                                var curyear = curdate.getFullYear();
                                var minyear = curyear - 14;
                                var maxyear = curyear + 0;
        for (maxyear; maxyear >= minyear; maxyear = maxyear - 1) {
                                    year.options.add(new Option(maxyear, maxyear));
                                }
                                for (var mindex = 1; mindex <= 12; mindex++) {
                                    month.options.add(new Option(mindex, mindex));
                                }
                            }

                            //判断是否是闰年
                            function leapyear(intyear) {
                                var result = false;
                                if (((intyear % 400 == 0) && (intyear % 100 != 0)) || (intyear % 4 == 0)) {
                                    result = true;
                                }
                                else {
                                    result = false;
                                }
                                return result;
                            }
                            //绑定天数
                            function addday(maxday) {
                                day.options.length = 1;
                                for (var dindex = 1; dindex <= maxday; dindex++) {
                                    day.options.add(new Option(dindex, dindex));
                                }
                            }
                            function changeday() {
                                if (year.value == null || year.value == "") {
                                    alert("请先选择年份！");
                                    return false;
                                }
                                else {
                                    if (month.value == 1 || month.value == 3 || month.value == 5 || month.value == 7 || month.value == 8 || month.value == 10 || month.value == 12) {
                                        addday(31);
                                    }
                                    else {
                                        if (month.value == 4 || month.value == 6 || month.value == 9 || month.value == 11) {
                                            addday(30);
                                        }
                                        else {
                                            if (leapyear(year.value)) {
                                                addday(29);
                                            }
                                            else {
                                                addday(28);
                                            }
                                        }
                                    }
                                }
                            }
                            window.onload = add;
                        </script> 