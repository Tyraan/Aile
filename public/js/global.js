// JavaScript Document

function auto_nav(){
	$('.nav_child .item').show();
	$(".nav_main a").each(function(index, element) {
        var w=0;
		var l=$(this).offset().left+$(this).outerWidth()*0.5-$(".nav_child").offset().left;
		
		var ci=$(".nav_child .item").eq(index);
		ci.each(function(index, element) {
            w+=$(this).outerWidth();
        });
		//$(".nav_child .child").eq(index).width(w);
		
		l=l+w*-0.5;
		
		if(l+w>$(".nav_child").width()){
			ci.css({left:"auto",right:139});
		}
		else if(w<0){
			ci.css({left:0});
		}
		else{
			ci.css({left:l});
		}
    });
	$('.nav_child .item').hide();
}




//全局js
$(function(){
//start

//滚动条
/*$("html").niceScroll({
	cursorcolor:"#111",
	cursorborder:"none",
	cursorwidth:"8px",
	scrollspeed:80,
	background:"#aaa",
	cursoropacitymin:0,
	cursoropacitymax:0.7,
	enablekeyboard:false,
	zindex:2
});*/
auto_nav();

var sto_nav;
var sto_nav1;
$(".nav_main .item").hover(
	function(){		
		clearTimeout(sto_nav);
		$(".nav_main .item").removeClass("cur");
		$(".nav_child .item").hide();
		$(".nav_bg").stop(true,true).hide();
		if($(".nav_child .item").eq($(this).index()).find("a").size()>0){
			$(".nav_child2").stop(true,true).hide();
			$(".nav_bg2").stop(true,true).hide();
			$(".nav_child .item").eq($(this).index()).show().addClass("s");
			$(".nav_bg").stop(true,true).slideDown(300);
			$(this).addClass("cur");
		}
		else{
			$(".nav_main .item").removeClass("cur");
		}
	},
	function(){
		var t=$(this);
		sto_nav=setTimeout(function(){
			$(".nav_child .item").hide().removeClass("s");
			$(".nav_bg").stop(true,true).slideUp(300);
			t.removeClass("cur");
		},100);
	}
);
$(".nav_child .item").hover(
	function(){
		clearTimeout(sto_nav);
	},
	function(){
		$(".nav_bg").stop(true,true).slideUp(300);
		$(".nav_main .item").removeClass("cur");
		$(".nav_child .item").hide().removeClass("s");
	}
);
$(".nav_main .item:eq(2)").hover(
	function(){
		clearTimeout(sto_nav1);
		$(this).addClass("cur");
		$(".nav_child2").stop(true,true).slideDown(300);
		$(".nav_bg2").stop(true,true).slideDown(300);
	},
	function(){
		var t=$(this);
		sto_nav1=setTimeout(function(){
			$(".nav_child2").slideUp(200);
			$(".nav_bg2").slideUp(200);
			t.removeClass("cur");
		},100);
	}
);
$(".nav_child2").hover(
	function(){
		clearTimeout(sto_nav);
		clearTimeout(sto_nav1);
	},
	function(){
		$(".nav_child2").stop(true,true).slideUp(200);
		$(".nav_bg2").stop(true,true).slideUp(200);
		$(".nav_main .item").removeClass("cur");
	}
);

var sto_sc;
$(".header .search").hover(
	function(){
		clearTimeout(sto_sc);
		$(this).find(".box").addClass("hover");
	},
	function(){
		if(!$(this).find(".box").hasClass("act")){
			sto_sc=setTimeout(function(){
				$(".header .search .box").removeClass("hover");
			},1000);
		}
	}
);
$(".header .search .kw").click(function(event){
	event.stopPropagation();
	$(".header .search .box").addClass("act");
});
$(window).click(function(){
	$(".header .search .box").removeClass("act").removeClass("hover");
});


$(".nav_float").css({marginTop:$(".nav_float").height()*-0.5});


$(window).scroll(function(){
	if($(".nav_bottom").size()>0){
		if(scrollact(".nav_bottom",0)){
			if(!$(".nav_bottom").hasClass("show")){
				$(".nav_bottom").addClass("show");
			}
		}
	}
});












$(".gotop").click(function(){
	$("html").animate({scrollTop:0},300+$(window).scrollTop()*0.3);
	if(navigator.appVersion.match("WebKit")){
		$("body").animate({scrollTop:0},300+$(window).scrollTop()*0.3);
	}
	else{
		$("html").animate({scrollTop:0},300+$(window).scrollTop()*0.3);
	}
});


//placeholder
if('placeholder' in document.createElement('input')==false){
	$("input,textarea").each(function(index, element) {
        if($(this).attr("placeholder")!=undefined){
			if($(this).attr("type")!="password"){
				$(this).val($(this).attr("placeholder"));
				$(this).attr("onFocus","if(this.value=='"+$(this).attr("placeholder")+"')this.value=''");
				$(this).attr("onBlur","if(this.value=='')this.value='"+$(this).attr("placeholder")+"'");
			}
		}
    });
}
$(".passwd").each(function(index, element) {
	var t=$(this);
	if('placeholder' in document.createElement('input')==false){
		$(this).find(".b").focus(function(){
			$(this).hide();
			t.find(".a").focus();
		});
		$(this).find(".a").focus(function(){
			t.find(".b").hide();
		});
		$(this).find(".a").blur(function(){
			if($(this).val()==""){
				t.find(".b").show();
			}
		});
	}
	else{
		t.find(".a").attr("placeholder",t.find(".b").attr("placeholder"));
		t.find(".b").remove();
	}
});


//end
});