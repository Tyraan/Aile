<script src="/js/jquery-1.7.2.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/jquery.transit.min.js"></script>
<script src="/js/fun.js"></script>
<script src="/js/global.js"></script>
<script src="/js/plus/jquery.mScroll.js"></script>
<script>
$("body").addClass("home");
$(function(){	
	var bh=$(window).height()-$(".head").outerHeight()-$(".header").outerHeight();
	$(".banner").height(bh);
	$("body").addClass("done");
});
$(window).resize(function(){
	var bh=$(window).height()-$(".head").outerHeight()-$(".header").outerHeight();
	$(".banner").height(bh);
});

$('.banner .frame').mScroll({
		     auto : 1,                   //自动开始
		direction : "h",                 //滚动方向,h横向,v纵向
		    dtype : "left",              //正反方向
		  isfocus : 1,                   //是否作为焦点图
		  minsize : 1,                   //最小数量
		    speed : 800,                 //滚动速度
		   easing : "easeInOutQuart",                  //缓冲类型
			delay : 5000,                //自动滚动间隔
			  nav : ".banner .nav a",                //导航按钮
        scrollnav : 0,                   //导航滚动
    nav_direction : "h",                 //导航方向,h横向,v纵向
			arrow : 1,                   //是否反转
			cycle : 1,                   //是否循环
		mousestop : 0,                   //鼠标划入停止
	   mousewheel : 0                    //开启滚轮事件
});
$('.home1 .ilovegym .province .frame').mScroll({
		     auto : 0,                   //自动开始
		direction : "h",                 //滚动方向,h横向,v纵向
		    dtype : "left",              //正反方向
		  isfocus : 1,                   //是否作为焦点图
		  minsize : 1,                   //最小数量
		    speed : 500,                 //滚动速度
		   easing : "",                  //缓冲类型
			delay : 5000,                //自动滚动间隔
			  nav : ".home1 .ilovegym .province .nav a",                //导航按钮
        scrollnav : 0,                   //导航滚动
    nav_direction : "h",                 //导航方向,h横向,v纵向
			arrow : 1,                   //是否反转
			cycle : 1,                   //是否循环
		mousestop : 1,                   //鼠标划入停止
	   mousewheel : 0                    //开启滚轮事件
});

$(".home0 .part2 .item").hover(
	function(){
		$(".home0 .part2 .list .c").css("left",$(this).index()*198+7).removeClass("show");
		$(".home0 .part2 .list .c").addClass("show");
	},
	function(){
		$(".home0 .part2 .list .c").removeClass("show");
	}
);

$(window).scroll(function(){
	if(scrollact(".home0",200)){
		if(!$(".home0").hasClass("show")){
			$(".home0").addClass("show");
		}
	}
	if(scrollact(".home0 .part2",0)){
		if(!$(".home0 .part2").hasClass("show")){
			$(".home0 .part2").addClass("show");
		}
	}
	if(scrollact(".home1",100)){
		if(!$(".home1").hasClass("show")){
			$(".home1").addClass("show");
		}
	}
	if(scrollact(".home2",100)){
		if(!$(".home2").hasClass("show")){
			$(".home2").addClass("show");
		}
	}
	if(scrollact(".home3",100)){
		if(!$(".home3").hasClass("show")){
			$(".home3").addClass("show");
		}
	}
	if(scrollact(".home4",100)){
		if(!$(".home4").hasClass("show")){
			$(".home4").addClass("show");
		}
	}
});

if(!isCss3("transition")){
	$(".home0").addClass("show");
	$(".home0 .part2").addClass("show");
	$(".home1").addClass("show");
	$(".home2").addClass("show");
	$(".home3").addClass("show");
	$(".home4").addClass("show");
}
</script>