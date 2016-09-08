// JavaScript Document

(function($) {
	$.fn.setBlock = function(options) {
		var opts = $.extend({},$.fn.setBlock.defaults,options); 
		//初始化
		var sw=0,x=0,y=0,x1,y1,n;
		var f=$(this);
		//f.css({positon:"absolute",cursor:"Crosshair"});
		f.each(function(){
			$(this).mousedown(function(event){
				sw=1;
				x=event.clientX;
				y=event.clientY;
				x1=parseInt($(this).css("left"));
				y1=parseInt($(this).css("top"));
				n=$(this);
			});
			$(this).mouseup(function(){
				sw=0;
			});
		});
		$(window).mouseup(function(){
			sw=0;
		});
		$(window).mousemove(function(event){
			if(sw){
				//n.text((x1+event.clientX-x)+":"+(y1+event.clientY-y));
				n.css("left",x1+event.clientX-x);
				n.css("top",y1+event.clientY-y);
			}
		});
		
	};
	$.fn.setBlock.defaults = {
		
	}
})(jQuery);