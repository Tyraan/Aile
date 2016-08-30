/*
左中右循环滚动焦点图

<style>
body{margin:0;}
a{text-decoration:none;color:#333;}
.focus{width:213px;position:relative;margin:auto;}
.focus .prev{position:absolute;left:-20px;top:50%;font-weight:bold;}
.focus .next{position:absolute;right:-20px;top:50%;font-weight:bold;}
.focus .prevg{position:absolute;left:-50px;top:50%;font-weight:bold;}
.focus .nextg{position:absolute;right:-50px;top:50%;font-weight:bold;}
.focus .start{position:absolute;left:-100px;top:50%;font-weight:bold;}
.focus .end{position:absolute;right:-100px;top:50%;font-weight:bold;}
.frame{width:213px;overflow:hidden;}
.frame .child{float:left;}
.nav{width:200px;overflow:hidden;margin:auto;}
.nav .child{float:left;}
.nav .now{opacity:0.5;}
</style>
<div class="focus">
  <div class="frame">
    <div class="child"><img src="image/pic1.jpg" width="213" height="189" /></div>
    <div class="child"><img src="image/pic1.jpg" width="213" height="189" /></div>
    <div class="child"><img src="image/pic1.jpg" width="213" height="189" /></div>
    <div class="child"><img src="image/pic1.jpg" width="213" height="189" /></div>
    <div class="child"><img src="image/pic1.jpg" width="213" height="189" /></div>
    <div class="child"><img src="image/pic1.jpg" width="213" height="189" /></div>
  </div>
  <div class="nav">
    <a href="javascript:;" class="child"><img src="image/pic1.jpg" width="50" /></a>
    <a href="javascript:;" class="child"><img src="image/pic1.jpg" width="50" /></a>
    <a href="javascript:;" class="child"><img src="image/pic1.jpg" width="50" /></a>
    <a href="javascript:;" class="child"><img src="image/pic1.jpg" width="50" /></a>
    <a href="javascript:;" class="child"><img src="image/pic1.jpg" width="50" /></a>
    <a href="javascript:;" class="child"><img src="image/pic1.jpg" width="50" /></a>
  </div>
  <a href="javascript:;" class="prev">&lt;</a>
  <a href="javascript:;" class="next">&gt;</a>
</div>
*/

(function($) {
	$.fn.mScroll = function(options) {
		var opts = $.extend({},$.fn.mScroll.defaults,options); 
		this.each(function(){
			//初始化
			var f,s,c,n,np,ns,w,ww,h,hh,w1,h1,size,iv,ti,sw=1,idx=0,mw,mh;
			f = $(this);
			
			//生成scroll
			if(f.children().is("ul")){
				f.children().addClass("scroll");
			}
			else{
				f.children().wrapAll("<div class='scroll' style='height:100%;'></div>");
			}
			s = f.find(".scroll");
			
			//计算总数
			size=s.children().size();
			$(opts.count).text(size);
			
			//生成child
			if(opts.cycle==1){
				var html=s.html();
				s.append(html);
				s.append(html);
			}
			c = s.children();
			
			//设置导航
			n = $(opts.nav);
			if(opts.scrollnav){
				w1 = n.outerWidth()+(parseInt(n.css("margin-left"))?parseInt(n.css("margin-left")):0)+(parseInt(n.css("margin-right"))?parseInt(n.css("margin-right")):0);
				h1 = n.outerHeight()+(parseInt(n.css("margin-top"))?parseInt(n.css("margin-top")):0)+(parseInt(n.css("margin-bottom"))?parseInt(n.css("margin-bottom")):0);
				np= $(opts.nav).parent();
				n.wrapAll("<div class='scroll' style='height:100%;'></div>");
				ns=np.find(".scroll");
				ns.width(n.size()*w1);
				np.stop().animate({scrollLeft:0},100);
			}
			n.eq(0).addClass("now");
			
			
			
			//f.width(w*opts.minsize);
			
			//初始化主要变量及位置
			if(opts.direction=="h"){
				if(parseInt(c.eq(1).css("margin-left"))+parseInt(c.eq(1).css("margin-right"))+parseInt(c.eq(1).css("padding-left"))+parseInt(c.eq(1).css("padding-right"))==0){
					w = parseInt(f.width()/opts.minsize);
					c.css({width:w});
				}
				else{
					w = c.width()+parseInt(c.eq(1).css("margin-left"))+parseInt(c.eq(1).css("margin-right"))+parseInt(c.eq(1).css("padding-left"))+parseInt(c.eq(1).css("padding-right"));
				}
				ww=size*w;
				s.css({width:100000});
				s.css({marginLeft:ww*-1});
				mw=ww*-1;
			}
			if(opts.direction=="v"){
				if(parseInt(c.eq(1).css("margin-top"))+parseInt(c.eq(1).css("margin-bottom"))+parseInt(c.eq(1).css("padding-top"))+parseInt(c.eq(1).css("padding-bottom"))==0){
					c.css({height:h});
					h = parseInt(f.height()/opts.minsize);
				}
				else{
					h =c.height()+parseInt(c.eq(1).css("margin-top"))+parseInt(c.eq(1).css("margin-bottom"))+parseInt(c.eq(1).css("padding-top"))+parseInt(c.eq(1).css("padding-bottom"));
				}
				s.height(100000);
				hh=size*h;
				s.css({marginTop:h*-1});
				mh=hh*-1;
			}
			
			//初始化次要变量及状态
			if(opts.cycle==0){opts.auto=0;}
			$(opts.title).text(c.eq(0).attr("alt"));
			
			if(opts.isfocus){
				$(window).resize(function(){rs();});
				rs();
				setTimeout(function(){rs();},300);
			}
			if(opts.auto==1){
				iv = window.setInterval(function(){move(opts.dtype);},opts.delay);
			}
			
			//自适应函数
			function rs(){
				sw==0;
				clearTimeout(ti);
				if(opts.direction=="h"){
					if(parseInt(c.eq(1).css("margin-left"))+parseInt(c.eq(1).css("margin-right"))+parseInt(c.eq(1).css("padding-left"))+parseInt(c.eq(1).css("padding-right"))==0){
						c.css({width:w});
						w=parseInt(f.width()/opts.minsize);
					}
					else{
						w=c.width()+parseInt(c.eq(1).css("margin-left"))+parseInt(c.eq(1).css("margin-right"))+parseInt(c.eq(1).css("padding-left"))+parseInt(c.eq(1).css("padding-right"));						
					}
					
				}
				if(opts.direction=="v"){
					if(parseInt(c.eq(1).css("margin-top"))+parseInt(c.eq(1).css("margin-bottom"))+parseInt(c.eq(1).css("padding-top"))+parseInt(c.eq(1).css("padding-bottom"))==0){
						c.css({height:h});
						h=parseInt(f.height()/opts.minsize);
					}
					else{
						h=parseInt(f.height()/opts.minsize)+parseInt(c.eq(1).css("margin-top"))+parseInt(c.eq(1).css("margin-bottom"))+parseInt(c.eq(1).css("padding-top"))+parseInt(c.eq(1).css("padding-bottom"));
					}
					
				}
				ww=size*w;
				hh=size*h;				
				if(opts.direction=="h"){
					mw=idx*w-ww;
					s.css({marginLeft:mw});
				}
				if(opts.direction=="v"){
					mh=idx*h-hh;
					s.css({marginTop:mh});
				}
				ti=setTimeout(function(){
					sw==1;
				},500);
			}
			
			//主函数
			function move(act){
				if(sw==1){
					sw=0;
					if(opts.direction=="h"){
						mw=parseInt(s.css("margin-left"));
						if(act=="left"){
							if(mw<=ww*-2){s.css("margin-left",ww*-1);mw=ww*-1;}							
							if(idx==size-1){idx=0;}
							else{idx++;}
							s.animate({marginLeft:mw-w},opts.speed,opts.easing,function(){sw=1;});
						}
						if(act=="right"){
							if(mw>=w*-1){s.css("margin-left",ww*-1-w);mw=ww*-1-w;}							
							if(idx==0){idx=size-1;}
							else{idx--;}
							s.animate({marginLeft:mw+w},opts.speed,opts.easing,function(){sw=1;});
						}						
					}
					if(opts.direction=="v"){
						mh=parseInt(s.css("margin-top"));
						if(act=="left"){
							if(mh<=hh*-2){s.css("margin-top",hh*-1);mh=hh*-1;}							
							if(idx==size-1){idx=0;}
							else{idx++;}
							s.animate({marginTop:mh-h},opts.speed,opts.easing,function(){sw=1;});
						}
						if(act=="right"){
							if(mh>=h*-1){s.css("margin-top",hh*-1-h);mh=hh*-1-h;}							
							if(idx==0){idx=size-1;}
							else{idx--;}
							s.animate({marginTop:mh+h},opts.speed,opts.easing,function(){sw=1;});
						}
					}
					n.removeClass("now");
					n.eq(idx).addClass("now");
					$(opts.title).text(c.eq(idx).attr("alt"));
					if(opts.scrollnav){autonav();}
				}
			}
			
			//箭头点击
			if(opts.prev){
				$(opts.prev).hover(function(){sw=1;});
				$(opts.prev).click(function(){
					if(opts.arrow==1){move("right");}
					else{move("left");}
				});
				
			}
			if(opts.next){
				$(opts.next).hover(function(){sw=1;});
				$(opts.next).click(function(){
					if(opts.arrow==1){move("left");}
					else{move("right");}
				});
			}
			
			//导航溢出部分滑动显示
			function autonav(){
				/*if(opts.direction=="h"){
					if(idx*w1==np.scrollLeft()){
						np.animate({scrollLeft:np.scrollLeft()-w1});
					}
					if(idx*w1==np.scrollLeft()+np.width()-w1){
						np.animate({scrollLeft:np.scrollLeft()+w1});
					}
				}
				if(opts.direction=="v"){
					if(idx*h1==np.scrollTop()){
						np.animate({scrollTop:np.scrollTop()-h1});
					}
					if(idx*h1==np.scrollTop()+np.height()-h1){
						np.animate({scrollTop:np.scrollTop()+h1});
					}
				}*/
				np.stop().animate({scrollLeft:idx*w1});
			}
			
			//导航点击
			n.each(function(index, element) {
				$(this).click(function(){
					if(opts.direction=="h"){s.stop().animate({marginLeft:index*w*-1},opts.speed,opts.easing,function(){sw=1;});}
					if(opts.direction=="v"){s.stop().animate({marginTop:index*h*-1},opts.speed,opts.easing,function(){sw=1;});}
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
			
			if(opts.mousestop && !opts.mousewheel){
				f.hover(function(){sw=0},function(){sw=1});
			}		
		})
	};
	$.fn.mScroll.defaults = {
		     auto : 1,             //自动开始
		direction : "h",           //h横向,v纵向
		    dtype : "left",             //正反方向
		  isfocus : 0,             //是否作为焦点图
		  minsize : 1,             //最小数量
		    speed : 800,           //滚动速度
		   easing : "jswing",            //渐变缓冲类型
			delay : 5000,          //自动滚动延迟
			  nav : null,          //导航
        scrollnav : 0,             //导航滚动
			 prev : null,          //前一个按钮
			 next : null,          //后一个按钮
		    index : null,          //当前序号
			count : null,          //总数
			title : null,          //标题
			arrow : 1,             //是否反转
			cycle : 1,             //是否循环
		mousestop : 1,             //是否鼠标划入停止
	   mousewheel : 0              //是否开启滚轮事件
	}
})(jQuery);
/*
$().mScroll({
		     auto : 1,             //自动开始
		direction : "h",           //h横向,v纵向
		    dtype : "left",        //正反方向
		  isfocus : 0,             //是否作为焦点图
		  minsize : 1,             //最小数量
		    speed : 800,           //滚动速度
		   easing : "",            //渐变缓冲类型
			delay : 5000,          //自动滚动延迟
			  nav : null,          //导航
        scrollnav : 0,             //导航滚动
			 prev : null,          //前一个按钮
			 next : null,          //后一个按钮
		    index : null,          //当前序号
			count : null,          //总数
			title : null,          //标题
			arrow : 1,             //是否反转
			cycle : 1,             //是否循环
		mousestop : 1,             //是否鼠标划入停止
	   mousewheel : 0              //是否开启滚轮事件
});
*/