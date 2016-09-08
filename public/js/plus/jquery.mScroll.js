/*
======示例=====
<style>
body{margin:20px;}
#focus{height:200px;width:500px;position:relative;margin:auto;border:5px solid #ccc;}
.frame{width:100%;height:100%;overflow:hidden;}
.frame .child{height:100%;float:left;}
.nav{position:absolute;width:60px;height:20px;overflow:hidden;left:50%;bottom:5px;margin-left:-31px;border:1px solid #aaa;}
.nav a{float:left;width:20px;height:20px;line-height:20px;font-size:12px;color:#000;text-align:center;background:#f5f5f5;}
.nav a.now{background:#aaa;color:#fff;}
.prev{right:30px;bottom:5px;width:20px;height:20px;line-height:20px;text-align:center;background:#f5f5f5;position:absolute;color:#000;font-size:12px;font-family:Arial;}
.next{right:5px;bottom:5px;width:20px;height:20px;line-height:20px;text-align:center;background:#f5f5f5;position:absolute;color:#000;font-size:12px;font-family:Arial;}
.title{height:30px;line-height:30px;float:left;}
.count{height:30px;line-height:30px;float:right;}
.count b{font-weight:normal;}
.count em{font-style:normal;}
</style>
<div id="focus"><a href="javascript:;" class="prev">&lt;</a><a href="javascript:;" class="next">&gt;</a>
  <div class="frame">
	<div class="child" style="background:#faa;" title="c1"></div>
	<div class="child" style="background:#afa;" title="c2"></div>
	<div class="child" style="background:#aaf;" title="c3"></div>
	<div class="child" style="background:#ffa;" title="c4"></div>
	<div class="child" style="background:#aff;" title="c5"></div>
  </div>
  <div class="nav">
	<a href="javascript:;">1</a>
	<a href="javascript:;">2</a>
	<a href="javascript:;">3</a>
	<a href="javascript:;">4</a>
	<a href="javascript:;">5</a>
  </div>
  <div class="title"></div>
  <div class="count"><b></b>/<em></em></div>
</div>
<script>
$('#focus .frame').mScroll({
		     auto : 1,                   //自动开始
		direction : "h",                 //滚动方向,h横向,v纵向
		    dtype : "left",              //正反方向
		  isfocus : 0,                   //是否作为焦点图
		  minsize : 1,                   //最小数量
		    speed : 500,                 //滚动速度
		   easing : "",                  //缓冲类型
			delay : 5000,                //自动滚动间隔
			  nav : "#focus .nav a",                //导航按钮
        scrollnav : 0,                   //导航滚动
    nav_direction : "h",                 //导航方向,h横向,v纵向
			 prev : "#focus .prev",      //前一个
			 next : "#focus .next",      //后一个
		    index : "#focus .index",     //当前序号
			count : "#focus .count b",   //总数
			title : "#focus .count em",  //标题
			arrow : 1,                   //是否反转
			cycle : 1,                   //是否循环
		mousestop : 1,                   //鼠标划入停止
	   mousewheel : 0,                     //开启滚轮事件
	        touch : 0                     //开启触摸事件
});
</script>
===============
*/
//变量解释
/*
f=对象主体frame
s=frame内滚动元素
c=s内子元素
n=导航子元素
np=导航父元素
ns=导航内滚动元素
w,h=滚动距离
ww,hh=原始总长度
size=s内子元素原始数量
iv,ti=定时器
sw=控制开关
idx=当前序号
cm=s内子元素边距
*/
(function($) {
	$.fn.mScroll = function(options) {
		var opts = $.extend({},$.fn.mScroll.defaults,options); 
		this.each(function(){
			//初始化变量
			var f = $(this);
			var s,c,n,np,ns,w,ww,h,hh,wn,hn,size,iv,ti,sw=1,sw1=0,idx=0,ids=0,cm=0;
			
			//控制判断初始化
			if(opts.cycle==0){opts.auto=0;}
			if(opts.touch==1){
				opts.minsize=1;
				opts.mousestop=0;
				opts.mousewheel=0;
			}
			
			//生成scroll结构，赋值s
			if(f.children().is("ul") && f.children().size()>1 && !f.children().hasClass("child")){
				f.children().addClass("scroll");
			}
			else{
				f.children().wrapAll("<div class='scroll' style='height:100%;'></div>");
			}
			s = f.find(".scroll");
			
			//初始化size
			size=s.children().size();			
			
			//创建c镜像，赋值c
			if(opts.cycle==1 && size>opts.minsize){s.append(s.html());}
			c = s.children();
			
			//初始化导航
			n = $(opts.nav);
			if(opts.scrollnav){
				wn = n.outerWidth()+parseInt(n.css("margin-left"))+parseInt(n.css("margin-right"));
				hn = n.outerHeight()+parseInt(n.css("margin-top"))+parseInt(n.css("margin-bottom"));
				np= $(opts.nav).parent();
				n.wrapAll("<div class='scroll' style='height:100%;'></div>");
				ns=np.find(".scroll");
				if(opts.nav_direction=="h"){
					ns.width(n.size()*wn);
					np.stop().animate({scrollLeft:0},100);
				}
				if(opts.nav_direction=="v"){
					ns.height(n.size()*hn);
					np.stop().animate({scrollTop:0},100);
				}
			}
			n.eq(0).addClass("now");
			
			//初始化各元素尺寸
			if(opts.direction=="h"){
				setH();
				s.css({width:100000});
				f.stop().animate({scrollLeft:0},100);
			}
			if(opts.direction=="v"){		
				setV();		
				s.height(100000);				
				f.stop().animate({scrollTop:0},100);
			}
			//尺寸设置函数
			function setH(){
				cm=parseInt(c.css("margin-left"))+parseInt(c.css("margin-right"));
				if(cm==0){
					w = Math.floor(f.width()/opts.minsize);
					if(opts.isfocus!=1){
						f.width(w*opts.minsize);
					}
					c.width(w);
				}
				else{					
					if(opts.isfocus!=1){
						w=c.width()+cm;
						f.width(w*opts.minsize-cm);
					}
				}
				ww=c.size()*w;
			}
			function setV(){
				cm=parseInt(c.css("margin-top"))+parseInt(c.css("margin-bottom"));
				if(cm==0){
					h = Math.floor(f.height()/opts.minsize);
					if(opts.isfocus!=1){
						f.height(h*opts.minsize);
					}
					c.height(h);
				}
				else{					
					if(opts.isfocus!=1){
						h=c.height()+cm;
						f.height(h*opts.minsize-cm);
					}
				}
				hh=c.size()*h;
			}
			
			//设置title
			$(opts.count).text(size);
			$(opts.title).text(c.eq(0).attr("title"));
			$(opts.index).text(1);
			
			//焦点图自适应
			$(window).resize(function(){rs();});
			setTimeout(function(){rs();},300);
			
			//自适应
			function rs(){
				sw==0;
				clearTimeout(ti);
				if(opts.direction=="h"){
					setH();
					f.stop().scrollLeft(idx*w);
				}
				if(opts.direction=="v"){
					setV();
					f.stop().scrollTop(idx*h);
				}
				ti=setTimeout(function(){
					sw==1;
				},500);
			}
			
			//判断c数量是否满足开始条件
			if(size>opts.minsize){
			
			//自动开始
			if(opts.auto==1){
				iv = setInterval(function(){move(opts.dtype);},opts.delay);
			}
			
			//-------------start-------------//
			//滚动函数
			function move(act,speed){
				if(!speed){speed=opts.speed;}
				if(sw==1){
					sw=0;
					if(opts.direction=="h"){
						if(act=="left"){
							if(opts.cycle!=1){
								if(idx+opts.minsize<size){
									idx++;ids++;
									if(opts.direction=="h"){
										f.animate({scrollLeft:ids*w},speed,opts.easing,function(){sw=1;});
									}
									if(opts.direction=="v"){
										f.animate({scrollTop:ids*h},speed,opts.easing,function(){sw=1;});
									}
									
								}
								else{sw=1;}
							}
							if(opts.cycle==1){	
								if(idx==size-1){idx=0;}
								else{idx++;}
								ids++;
								if(opts.direction=="h"){
									f.animate({scrollLeft:ids*w},speed,opts.easing,function(){									
										if(f.scrollLeft()>=ww*0.5){f.scrollLeft(0);ids=0;}
										sw=1;
									});
								}
								if(opts.direction=="v"){
									f.animate({scrollTop:ids*h},speed,opts.easing,function(){
										if(f.scrollTop()>=hh*0.5){f.scrollTop(0);ids=0;}
										sw=1;
									});
								}
								
							}
						}
						if(act=="right"){
							if(opts.cycle!=1){
								if(idx>0){
									idx--;ids--;
									if(opts.direction=="h"){
										f.animate({scrollLeft:ids*w},speed,opts.easing,function(){sw=1;});
									}
									if(opts.direction=="v"){
										f.animate({scrollTop:ids*h},speed,opts.easing,function(){sw=1;});
									}
								}
								else{sw=1;}
							}
							if(opts.cycle==1){
								if(idx==0){idx=size-1;ids=size;}
								else{idx--;}
								ids--;
								if(opts.direction=="h"){
									if(f.scrollLeft()<=0){f.scrollLeft(ww*0.5);}
									f.animate({scrollLeft:ids*w},speed,opts.easing,function(){sw=1;});
								}
								if(opts.direction=="v"){
									if(f.scrollTop()<=0){f.scrollTop(hh*0.5);}
									f.animate({scrollTop:ids*h},speed,opts.easing,function(){sw=1;});
								}
							}
						}						
					}					
					n.removeClass("now");
					n.eq(idx).addClass("now");
					$(opts.title).text(c.eq(idx).attr("title"));
					$(opts.index).text(idx+1);					
					if(opts.scrollnav){autonav();}
				}
			}
			//左右按钮
			if(opts.prev){
				$(opts.prev).hover(function(){sw=1;});
				$(opts.prev).click(function(){
					if(opts.arrow==1){move("right");}
					else{move("left");}
					if(opts.auto){
						clearInterval(iv);
						iv = window.setInterval(function(){move(opts.dtype);},opts.delay);
					}
				});
				
			}
			if(opts.next){
				$(opts.next).hover(function(){sw=1;});
				$(opts.next).click(function(){
					if(opts.arrow==1){move("left");}
					else{move("right");}
					if(opts.auto){
						clearInterval(iv);
						iv = window.setInterval(function(){move(opts.dtype);},opts.delay);
					}
				});
			}
			
			//导航溢出部分滑动显示
			function autonav(){
				if(opts.nav_direction=="h"){					
					if(idx*wn==np.scrollLeft()){
						np.stop().animate({scrollLeft:np.scrollLeft()-wn},opts.speed);
					}
					if((idx+1)*wn==np.scrollLeft()+np.width()){
						np.stop().animate({scrollLeft:np.scrollLeft()+wn},opts.speed);
					}
					if(idx==0){np.stop().animate({scrollLeft:0},opts.speed);}
					if(idx==size-1){np.stop().animate({scrollLeft:size*wn},opts.speed);}
				}
				if(opts.nav_direction=="v"){
					if(idx*hn==np.scrollTop()){
						np.stop().animate({scrollTop:np.scrollTop()-hn},opts.speed);
					}
					if((idx+1)*hn==np.scrollTop()+np.height()){
						np.stop().animate({scrollTop:np.scrollTop()+hn},opts.speed);
					}
					if(idx==0){np.stop().animate({scrollTop:0},opts.speed);}
					if(idx==size-1){np.stop().animate({scrollTop:size*hn},opts.speed);}
				}
			}
			//导航点击
			n.each(function(index, element) {
				$(this).click(function(){
					if(opts.direction=="h"){f.stop().animate({scrollLeft:index*w},opts.speed,opts.easing,function(){sw=1;});}
					if(opts.direction=="v"){f.stop().animate({scrollTop:index*h},opts.speed,opts.easing,function(){sw=1;});}
					idx=index;
					n.removeClass("now");
					n.eq(idx).addClass("now");
					if(opts.scrollnav){autonav();}
					$(opts.title).text(c.eq(idx).attr("alt"));
					if(opts.auto){
						clearInterval(iv);
						iv = window.setInterval(function(){move(opts.dtype);},opts.delay);
					}						
				});
			});
			//鼠标滚轮
			if(opts.mousewheel){
				f.mousewheel(function(event,delta,deltaX,deltaY){
					if(delta<0){
						if(opts.arrow==1){move("left");}
						else{move("right");}
					}
					else{
						if(opts.arrow==1){move("right");}
						else{move("left");}
					}
					event.stopPropagation();
					event.preventDefault();
				});
			}
			//鼠标划入停止
			if(opts.mousestop && !opts.mousewheel){
				f.hover(function(){sw=0},function(){sw=1});
			}
			
			//触摸控制
			if(opts.touch){
				f.attr("id","frame"+f.offset().top);
				var touch,x0,fl;
				var obj1=document.getElementById(f.attr("id"));
				var start,end="";
				
				obj1.addEventListener('touchstart',function(event){
					if(sw==1){
						sw1=1;
						touch = event.targetTouches[0];
						x0=touch.screenX;
						start=touch.screenX;
						fl=f.scrollLeft();
						if(opts.auto){
							clearInterval(iv);
						}
					}
				},false);
				obj1.addEventListener('touchmove',function(event){
					if(sw==1 && sw1==1){
						touch = event.targetTouches[0];
						f.scrollLeft(fl-(touch.screenX-x0));
						end=touch.screenX;
						if(Math.abs(touch.screenX-x0)>$(window).width()*0.05){
							event.preventDefault();//阻止浏览器默认事件
						}
					}
				},false);
				obj1.addEventListener('touchend',function(event){
					if(sw==1 && end!=""){
						if(end-start<w*-0.2){
							move("left",(w-Math.abs(end-start))/w*opts.speed);
						}
						else if(end-start>w*0.2){
							move("right",(w-Math.abs(end-start))/w*opts.speed);
						}
						else{
							sw=0;						
							f.stop().animate({scrollLeft:ids*w},opts.speed*0.5,opts.easing,function(){sw=1;});
						}
						if(opts.auto){
							clearInterval(iv);
							iv = window.setInterval(function(){move(opts.dtype);},opts.delay);
						}
						sw1=0;
						end="";
					}
				},false);
			}
				
			//-------------end-------------//
			}
		})
	};
	$.fn.mScroll.defaults = {
		     auto : 1,                    //自动开始
		direction : "h",                  //滚动方向,h横向,v纵向
		    dtype : "left",               //正反方向
		  isfocus : 0,                    //是否作为焦点图
		  minsize : 1,                    //最小数量
		    speed : 500,                  //滚动速度
		   easing : "",                   //缓冲类型
			delay : 5000,                 //自动滚动间隔
			  nav : null,                 //导航按钮
        scrollnav : 0,                    //导航滚动
    nav_direction : "h",                  //导航方向,h横向,v纵向
			 prev : null,                 //前一个
			 next : null,                 //后一个
		    index : null,                 //当前序号
			count : null,                 //总数
			title : null,                 //标题
			arrow : 1,                    //是否反转
			cycle : 1,                    //是否循环
		mousestop : 1,                    //鼠标划入停止
	   mousewheel : 0,                     //开启滚轮事件
	        touch : 0                     //开启触摸事件
	}
})(jQuery);