// JavaScript Document

(function($) {
	$.fn.setMap = function(options) {
		var opts = $.extend({},$.fn.setMap.defaults,options); 
		//初始化
		var t=$(this)
		var x,y,canvs,c,sw=0;
		var area=new Array();
		
		$("body").append("<div class='control' style='text-align:center;position:fixed;bottom:0;left:50%;width:200px;height:22px;padding:5px;margin-left:-100px;background:#fafafa;box-shadow:0 0 5px rgba(0,0,0,0.3);'><button class='begin'>begin</button>&nbsp;<button class='end'>close</button>&nbsp;<button class='cls'>clear</button></div>");	
		t.append("<canvas id='mycanvas' style='position:relative;width:100%;height:100%;z-index:1;'></canvas>");
		t.append("<img src='image/blank.gif' style='width:100%;height:100%;' usemap='#map' />");	
		t.append("<map id='map' name='map'></map>");
		
		
		var map=t.find("map");
		var begin=$(".control .begin");
		var end=$(".control .end");
		var clear=$(".control .cls");
		
		function init(){
			canvs=document.getElementById("mycanvas");
			canvs.width=t.width();
			canvs.height=t.height();
			c=canvs.getContext("2d");
			c.lineWidth=1;
			c.lineCap="round";
			c.lineJoin="round";
			//c.fillStyle="rgba(0,0,255,0.3)";
			c.strokeStyle="#0000ff"
		}
		init();
		
		begin.click(function(event){
			sw=1;
			$(this).css({color:"#f00"});
		});
		end.click(function(event){
			c.closePath();
			c.stroke();
			var str=area.join(",");
			area=[];
			map.append("<area href='#' coords='"+str+"' shape='polygon' />");
			begin.css({color:"#000"});	
			sw=0;
		});
		clear.click(function(){
			init();
			area=[];
			begin.css({color:"#000"});
			sw=0;
			map.html("");
		});
		
		$(this).click(function(event){
			if(sw==1){
				x=event.clientX-t.offset().left+$(window).scrollLeft();
				y=event.clientY-t.offset().top+$(window).scrollTop();
				area.push(x);
				area.push(y);
				//console.log(area);				
				
				if(area.length==2){
					c.moveTo(x,y);
				}
				else{
					c.lineTo(x,y);
					c.stroke();
				}
			}
		});		
	};
	$.fn.setMap.defaults = {
		
	}
})(jQuery);