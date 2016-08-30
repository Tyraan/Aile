// JavaScript Document

(function($) {
	$.fn.photoshow = function(options) {
		var opts = $.extend({},$.fn.photoshow.defaults,options); 
		this.each(function(){
			//初始化
			var f,s,sh,l,size,sw=1,sw1=1;idx=0;
			f = $(this).find(".frame");
			s = $(this).find(".scroll");
			sh = $(this).find(".show");
			des = $(this).find(".des");
			des.append(des.html());
			des.children(":first").show();
			l = s.children().outerWidth()+parseInt(s.children().css("margin-left"))+parseInt(s.children().css("margin-right"));
			size=s.children().size();
			s.append(s.html());
			s.width(size*l*2);
			f.scrollLeft(0);
			f.css("left",(f.parent().width()-f.width())*0.5);
			s.children(":first").addClass("now");
			s.find("img").each(function(){
				if($(this).attr("href")){
					sh.append("<div><a href='"+$(this).attr("href")+"' target='_blank'><img src='"+$(this).attr("src")+"' /></a></div>");
				}
				else{
					sh.append("<div><img src='"+$(this).attr("src")+"' /></div>");
				}
			});
			sh.find("div").hide();
			sh.find("div:first").show();
			sh.find("div:first").addClass("h");
			if(sh.find(".h img").width()>sh.width()){
				sh.find(".h img").width(sh.width());
			}
			sh.height(sh.find("img:first").height());
			sh.find("img:first").load(function(){//针对chrome
				sh.height($(this).height());
			});
			//移动面板
			function move(mType){
				if(sw==1){
					sw=0;
					if(mType=="left"){
						if(idx>=size){f.scrollLeft(0);idx=1;}else{idx++;}
						show("left");
					}
					if(mType=="right"){
						if(idx==0){f.scrollLeft(size*l);idx=size-1;}else{idx--;}
						show("right");
					}
					f.animate({scrollLeft:l*idx},opts.speed,function(){sw=1;});
					setnow(idx);
					showdes(idx);
				}
			}
			//展示图片
			function show(sType){
				sh.find(".h").attr("class","oh");
				if(sType=="left"){
					sh.find("div").eq(idx).css("left",sh.width()).addClass("h");
				}
				if(sType=="right"){
					sh.find("div").eq(idx).css("left",sh.width()*-1).addClass("h");
				}
				if(typeof(sType)=="number"){
					sh.find("div").eq(sType).css("left",0).addClass("h");
				}
				
				if(opts.sType==1 || sh.find(".h").attr("class").match("oh")){
					sh.find(".h").css("left",0).removeClass("oh");
					sh.find(".h").css({display:"block",opacity:0});
				}
				else{
					sh.find(".h").css({display:"block",opacity:0});
				}
				
				if(sh.find(".h img").width()>sh.width()){
					sh.find(".h img").width(sh.width());
				}
				
				sh.stop().animate({height:sh.find(".h img").height()},opts.speed);
					
				if(opts.sType==1 || opts.sType==3 || typeof(sType)=="number"){
					sh.find(".oh").animate({opacity:0},opts.speed,function(){sh.find(".oh").hide();sh.find(".oh").removeClass("oh");});
				}
				if(opts.sType==2){
					if(sType=="left"){
						sh.find(".oh").animate({left:sh.width()*-1},opts.speed,function(){sh.find(".oh").hide();sh.find(".oh").removeClass("oh");});
					}
					if(sType=="right"){
						sh.find(".oh").animate({left:sh.width()},opts.speed,function(){sh.find(".oh").hide();sh.find(".oh").removeClass("oh");});
					}
				}
				sh.find(".h").animate({opacity:1,left:0},opts.speed);
				
			}
			//显示描述
			function showdes(i){
				des.children().hide();
				des.children().eq(i).fadeIn();
			}
			//设定当前
			function setnow(i){
				s.children().removeClass("now");
				s.children().eq(i).addClass("now");
			}
			//上一个
			$(this).find(".prev").click(function(){
				if(opts.arrow==0){move("left");}
				if(opts.arrow==1){move("right");}
			});
			//下一个
			$(this).find(".next").click(function(){
				if(opts.arrow==0){move("right");}
				if(opts.arrow==1){move("left");}
			});
			//指定点击
			s.children().click(function(){
				setnow($(this).index());
				showdes($(this).index());
				show($(this).index());
			});
			//自动开始
			if(opts.auto==1){
				window.setInterval(function(){move(opts.mType);},opts.time);
				s.hover(
					function(){sw=0;},
					function(){sw=1;}
				);
			}
		})
	};
	$.fn.photoshow.defaults = {
		sType : 1,  //效果类型,1为淡入淡出,2为滑动,3为滑动+淡入淡出
		auto  : 0,  //是否自动播放,1为自动,0为手动
		arrow : 1,  //是否反转箭头,1为点击左侧向右滚动,0则相反
		mType : "left",  //自动播放方向
		speed : 500,  //滚动效果速度
		time  : 3000  //滚动周期时间
	}
})(jQuery);