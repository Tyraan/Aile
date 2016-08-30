// JavaScript Document

(function($) {
	$.fn.mScroll = function(options) {
		var opts = $.extend({},$.fn.mScroll.defaults,options); 
		this.each(function(){
			//初始化
			if(opts.cycle==0){opts.auto=0;}
			var m,f,s,c,w,h,sw=1;
			var idx=1;
			f = $(this);
			if(f.children().size()<opts.size){return false;}
			f.children().wrapAll("<div class='scroll'></div>");
			s = f.find(".scroll");
			if(opts.cycle==1){s.append(s.html());}
			c = s.children();
			w = c.outerWidth()+(parseInt(c.css("margin-left"))?parseInt(c.css("margin-left")):0)+(parseInt(c.css("margin-right"))?parseInt(c.css("margin-right")):0);
			h = c.outerHeight()+(parseInt(c.css("margin-top"))?parseInt(c.css("margin-top")):0)+(parseInt(c.css("margin-bottom"))?parseInt(c.css("margin-bottom")):0);
			c.css("opacity",0.3);
			c.eq(1).css("opacity",1);
			c.eq(1).addClass("now");
			$(opts.navs).eq(0).addClass("now");
			if(opts.direction=="h"){
				//f.css({width:opts.size*w,height:h});
				s.width(c.size()*w);
				f.scrollLeft(0);
			}
			if(opts.direction=="v"){
				f.css({width:w,height:opts.size*h,overflow:"hidden"});
				s.height(c.size()*h);
				f.scrollTop(0);
			}
			$(opts.navs).eq(0).clone().appendTo($(opts.navs).parent());
			$(opts.navs).eq(0).remove();
			
			function move(act){
				if(sw==1){
					sw=0;
					if(opts.direction=="h"){
						if(idx+1>c.size()*0.5){
							$(opts.navs).removeClass("now");
							$(opts.navs).eq(idx-c.size()*0.5).addClass("now");
						}
						else{
							$(opts.navs).removeClass("now");
							$(opts.navs).eq(idx+1-1).addClass("now");
						}
						if(act=="left"){
							idx++;
							if(idx>c.size()*0.5+1 && opts.cycle==1){s.css("left",0);idx=2;c.eq(idx-1).css("opacity",1).addClass("now");}
							s.animate({left:(idx-1)*w*-1},opts.speed,function(){sw=1;});
							
							s.find(".now").animate({opacity:0.3},"slow");
							s.find(".now").removeClass("now");
							c.eq(idx).animate({opacity:1},"slow");
							c.eq(idx).addClass("now");
						}
						if(act=="right"){
							idx--;
							if(parseInt(s.css("left"))*-1<=0 && opts.cycle==1){
								s.css("left",s.width()*0.5*-1);
								idx=c.size()*0.5;
								c.eq(idx+1).css("opacity",1).addClass("now");
							}//alert(idx);
							s.animate({left:(idx-1)*w*-1},opts.speed,function(){sw=1;});
							s.find(".now").animate({opacity:0.3},"slow");
							s.find(".now").removeClass("now");
							c.eq(idx).animate({opacity:1},"slow");
							c.eq(idx).addClass("now");
						}
						
					}
					if(opts.direction=="v"){
						if(act=="left"){
							if(f.scrollTop()>=(s.height()*0.5) && opts.cycle==1){f.scrollTop(0);}
							f.animate({scrollTop:f.scrollTop()+h},opts.speed,function(){sw=1;});
						}
						if(act=="right"){
							if(f.scrollTop()<=0 && opts.cycle==1){f.scrollTop(s.width()*0.5);}
							f.animate({scrollTop:f.scrollTop()-h},opts.speed,function(){sw=1;});
						}
					}
				}
			}
			if(opts.prev){
				$(opts.prev).click(function(){
					if(opts.arrow==1){move("right");}
					else{move("left");}
				});
			}
			if(opts.next){
				$(opts.next).click(function(){
					if(opts.arrow==1){move("left");}
					else{move("right");}
				});
			}
			$(opts.navs).each(function(i){
				$(this).click(function(){
					idx=i;
					move("left");
				});
			});	
					
			if(opts.auto==1){
				iv = window.setInterval(function(){move("left");},opts.delay);
			}
			f.hover(function(){sw=0},function(){sw=1});
			if(opts.auto==1){
				$(opts.next).hover(function(){window.clearInterval(iv);},function(){iv = window.setInterval(function(){move("left");},opts.delay);});
				$(opts.prev).hover(function(){window.clearInterval(iv);},function(){iv = window.setInterval(function(){move("left");},opts.delay);});
			}
		})
	};
	$.fn.mScroll.defaults = {
		     auto : 1,             //自动开始
		direction : "h",           //h横向,v纵向
		    speed : 800,           //滚动速度
			delay : 5000,          //自动滚动延迟
			 size :　1,             //最小子元素个数
			 prev : null,          //前一个按钮
			 next : null,          //后一个按钮
			 navs : '',
			arrow : 1,             //是否反转
			cycle : 1              //是否循环
	}
})(jQuery);