/*
<style>
.focus{position:relative;width:100%;height:45%;}
.focus .frame{width:80%;margin:auto;height:100%;position:relative;}
.focus .frame .child{position:absolute;top:0;opacity:0;}
.focus .frame .child a{height:100%;width:100%;position:absolute;}
.focus .frame .child img{width:100%;height:auto;}
.focus .frame .rr2{left:85%;width:25%;height:100%;}
.focus .frame .ll2{left:-25%;width:25%;}
.focus .frame .ll{left:-25%;width:25%;transition:all 0.5s linear 0s;height:100%;}
.focus .frame .l{left:0;width:35%;top:3%;opacity:0.5;transition:all 0.5s linear 0s;height:100%;
-moz-transform:perspective(538px) rotateY(8deg);
-webkit-transform:perspective(538px) rotateY(8deg);
}
.focus .frame .c{left:30%;width:40%;z-index:1;transition:all 0.5s linear 0s;height:100%;opacity:1;}
.focus .frame .r{left:65%;width:35%;top:3%;opacity:0.5;transition:all 0.5s linear 0s;height:100%;
-moz-transform:perspective(538px) rotateY(-8deg);
-webkit-transform:perspective(538px) rotateY(-8deg);
}
.focus .frame .rr{left:85%;width:25%;transition:all 0.5s linear 0s;height:100%;}
</style>
<div class="focus">
  <div class="frame">
	<div class="child"><a href="#" style="background:#f00;"></a><img src="image/pic10.png" /></div>
	<div class="child"><a href="#" style="background:#0f0;"></a><img src="image/pic10.png" /></div>
	<div class="child"><a href="#" style="background:#00f;"></a><img src="image/pic10.png" /></div>
	<div class="child"><a href="#" style="background:#ff0;"></a><img src="image/pic10.png" /></div>
	<div class="child"><a href="#" style="background:#f0f;"></a><img src="image/pic10.png" /></div>
  </div>
</div>
*/
(function($) {
	$.fn.mScroll5 = function(options) {
		var opts = $.extend({},$.fn.mScroll5.defaults,options); 
		this.each(function(){
			//初始化
			var m,f,s,c,n,np,w,h,size,iv,sw=1,idx=1;
			f = $(this);
			c = f.children();
			size=c.size();
			
			c.eq(size-1).addClass("ll");
			c.eq(0).addClass("l");
			c.eq(1).addClass("c");
			c.eq(2).addClass("r");
			c.eq(3).addClass("rr");
						
			var x1=0;x2=1,x3=2;x4=3;
			function move(act){
				if(sw==1){
					sw=0;
					if(act=="left"){
						f.find(".ll").addClass("rr");
						f.find(".ll").removeClass("ll");
						
						if(x1==size)x1=0;
						c.eq(x1).removeClass("l");
						c.eq(x1).addClass("ll");
						x1++;
						
						if(x2==size)x2=0;
						c.eq(x2).removeClass("c");
						c.eq(x2).addClass("l");
						x2++;
						
						if(x3==size)x3=0;
						c.eq(x3).removeClass("r");
						c.eq(x3).addClass("c");
						c.eq(x3).removeClass("ll2");
						c.eq(x3).removeClass("rr2");
						x3++;
						
						if(x4==size)x4=0;
						c.eq(x4).addClass("rr2");
						c.eq(x4).removeClass("rr");
						c.eq(x4).addClass("r");
						x4++;
								
						sw=1;
					}
					if(act=="right"){
						f.find(".rr").addClass("ll");
						f.find(".rr").removeClass("rr");
						
						if(x1==0)x1=size;
						x1--;
						c.eq(x1).addClass("ll2");
						c.eq(x1).removeClass("ll");
						c.eq(x1).addClass("l");
						
						if(x2==0)x2=size;
						x2--;
						c.eq(x2).removeClass("l");
						c.eq(x2).addClass("c");
						c.eq(x2).removeClass("ll2");
						c.eq(x2).removeClass("rr2");
						
						if(x3==0)x3=size;
						x3--;
						c.eq(x3).removeClass("c");
						c.eq(x3).addClass("r");
						
						if(x4==0)x4=size;
						x4--;
						c.eq(x4).removeClass("r");
						c.eq(x4).addClass("rr");
						
						sw=1;
					}
				}
			}
			
			//判断是否满足触发条件
			if(opts.prev){
				$(opts.prev).click(function(){
					sw=1;
					if(opts.arrow==1){move("right");}
					else{move("left");}
				});
			}
			if(opts.next){
				$(opts.next).click(function(){
					sw=1;
					if(opts.arrow==1){move("left");}
					else{move("right");}
				});
			}
			
			c.click(function(){
				if($(this).index()>f.find(".c").index()){
					move("left");
				}
				if($(this).index()<f.find(".c").index()){
					move("right");
				}
				if(opts.auto){
					clearInterval(iv);
					iv = window.setInterval(function(){move(opts.direction);},opts.delay);
				}
			});;
			
			/*if(opts.mousewheel){
				f.mousewheel(function(event, delta, deltaX, deltaY){
					if(delta<0){
						if(opts.next){$(opts.next).click();}
					}
					else{
						if(opts.prev){$(opts.prev).click();}
					}
					event.stopPropagation();
					event.preventDefault();
				});
			}*/
			
			/*n.each(function(index, element) {
				$(this).click(function(){
					f.stop().animate({scrollLeft:index*w},opts.speed,opts.easing,function(){sw=1;});
					idx=index;
					n.removeClass("now");
					n.eq(idx).addClass("now");
					if(opts.auto){
						clearInterval(iv);
						iv = window.setInterval(function(){move(opts.direction);},opts.delay);
					}						
				});
			});*/
			
			if(opts.auto==1){
				iv = window.setInterval(function(){move(opts.direction);},opts.delay);
			}
			
		})
	};
	$.fn.mScroll5.defaults = {
		     auto : 1,             //自动开始
		    speed : 800,           //滚动速度
		direction : "left",        //移动方向
		   easing : "",            //渐变缓冲类型
			delay : 5000,          //自动滚动延迟
			 prev : null,          //前一个按钮
			 next : null,          //后一个按钮
			arrow : 1,             //是否反转
	}
})(jQuery);