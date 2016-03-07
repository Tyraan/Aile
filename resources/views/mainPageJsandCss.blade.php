<link rel="shortcut icon" type="image/x-icon" href="{{  URL::asset('/images/aileguoji.ico') }}" media="screen" />

<script type="text/javascript" src="{{ URL::asset('/js/jquery-1.7.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/js/jquery.event.drag-1.5.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('/js/jquery.touchSlider.js') }}"></script>

<link type="text/css" href="/css/style10_15.css" rel="stylesheet">
<link type="text/css" href="{{ URL::asset('/css/style_index.css') }}" rel="stylesheet">
<link type="text/css" href="{{ URL::asset('/css/style_boox1.css') }}" rel="stylesheet">
<script type="text/javascript" charset="utf-8" src="http://lead.soperson.com/20000301/10045318.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	$(".main_visual").hover(function(){
		$("#btn_prev,#btn_next").fadeIn()
	},function(){
		$("#btn_prev,#btn_next").fadeOut()
	});
	
	$dragBln = false;
	
	$(".main_image").touchSlider({
		flexible : true,
		speed : 200,
		btn_prev : $("#btn_prev"),
		btn_next : $("#btn_next"),
		paging : $(".flicking_con a"),
		counter : function (e){
			$(".flicking_con a").removeClass("on").eq(e.current-1).addClass("on");
		}
	});
	
	$(".main_image").bind("mousedown", function() {
		$dragBln = false;
	});
	
	$(".main_image").bind("dragstart", function() {
		$dragBln = true;
	});
	
	$(".main_image a").click(function(){
		if($dragBln) {
			return false;
		}
	});
	
	timer = setInterval(function(){
		$("#btn_next").click();
	}, 5000);
	
	$(".main_visual").hover(function(){
		clearInterval(timer);
	},function(){
		timer = setInterval(function(){
			$("#btn_next").click();
		},5000);
	});
	
	$(".main_image").bind("touchstart",function(){
		clearInterval(timer);
	}).bind("touchend", function(){
		timer = setInterval(function(){
			$("#btn_next").click();
		},5000);
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
</script>

<SCRIPT LANGUAGE="JavaScript">
function mobile_device_detect(url)
{

        var thisOS=navigator.platform;

        var os=new Array("iPhone","iPod","android","Nokia","SymbianOS","Symbian","Windows Phone","Phone","Linux armv71","MAUI","UNTRUSTED/1.0","Windows CE","BlackBerry","IEMobile");

 for(var i=0;i<os.length;i++)
        {

 if(thisOS.match(os[i]))
        {   
  window.location=url;
 }
  
 }



 //做这一部分是因为Android手机的内核也是Linux
 //但是navigator.platform显示信息不尽相同情况繁多,因此从浏览器下手，即用navigator.appVersion信息做判断
  var check = navigator.appVersion;

  if( check.match(/linux/i) )
          {
   //X11是UC浏览器的平台 ，如果有其他特殊浏览器也可以附加上条件
   if(check.match(/mobile/i) || check.match(/X11/i))
                 {
   window.location=url;
   }  
 }

 //类in_array函数
 Array.prototype.in_array = function(e)
 {
  for(i=0;i<this.length;i++)
  {
   if(this[i] == e)
   return true;
  }
  return false;
 }
} 

mobile_device_detect("http://www.ilovegym.com/mobile/");

</SCRIPT>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?287002be1059509e17e9225067ddb064";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
