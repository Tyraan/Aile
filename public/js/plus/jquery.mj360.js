/**
 * j360 jQuery plugin
 * author     Stable Flow
 * copyright  (c) 2009-2010 by StableFlow
 * link       http://www.stableflow.com/downloads/jquery-plugins/360-degrees-product-view/
 *
 * Version: 1.0.0 (12/13/2010)
 * Requires: jQuery v1.3+
 *
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */
/*
.photo360{width:400px;height:450px;position:relative;}
.photo360 .pic{width:100%;height:100%;position:absolute;left:0;top:0;overflow:hidden;}
.photo360 img{width:100%;height:auto;}
<div class="photo360" onselectstart="return false" style="-moz-user-select:none;-webkit-user-select:none;">
  <div class="pic">
	<img src="image/pro1/0.png" />
	<img src="image/pro1/1.png" />
	<img src="image/pro1/2.png" />
	<img src="image/pro1/3.png" />
	<img src="image/pro1/4.png" />
	<img src="image/pro1/5.png" />
	<img src="image/pro1/6.png" />
	<img src="image/pro1/7.png" />
	<img src="image/pro1/8.png" />
	<img src="image/pro1/9.png" />
  </div>
</div>
$(function(){
	$(".photo360 .pic").j360();
});
*/

(function($) {
	$.fn.j360 = function(options) {
		var opts = $.extend({},$.fn.j360.defaults,options); 
		this.each(function(){
			//初始化
			var $obj = $(this);
            var aImages = {};
			var $overlay;
            $obj.css({
                'margin-left' : 'auto',
                'margin-right' : 'auto',
                'text-align' : 'center',
                'overflow' : 'hidden'
            });
			
			$obj.find("img").wrapAll("<div class='imgshow' style='position:absolute;left:0;top:0;width:100%;height:100%;display:none;'></div>");
			$obj.append("<div class='overlay'></div>");
            $overlay = $obj.find(".overlay");
			$overlay.css({
				'background':'url(image/loading1.gif) center center no-repeat',
                'position' : 'absolute',
                'z-index': '5',
				'height':'100%',
				'overflow':'hidden',
                'top' : 0,
                'left' : 0
            });
			$overlay.append("<div class='loadimgs' style='visibility:hidden;'></div>")

            var imageTotal = 0;
            $('img',$obj).each(function() {
                aImages[++imageTotal] = $(this).attr('src');
				$overlay.find(".loadimgs").append("<img class=\"preload_img\" src=\"" + $(this).attr('src') + "\" />");
            })
            var imageCount = 0;
            $obj.find('.preload_img').load(function() {
				$(this).attr("loaded","1");
                if (++imageCount == imageTotal) {
					$obj.find(".imgshow").show();
                    $overlay.animate({
                        'filter' : 'alpha(Opacity=0)',
                        'opacity' : 0
                    }, 500);
                    $obj.find(".imgshow").html('<img src="' + aImages[1] + '" />');
                    $overlay.bind('mousedown touchstart', function(e) {
                        if (e.type == "touchstart") {
                            opts.currPos = window.event.touches[0].pageX;
                        } else {
                            opts.currPos = e.pageX;
                        }
                        opts.clicked = true;
                        return false;
                    });
                    $(document).bind('mouseup touchend', function() {
                        opts.clicked = false;
                    });
                    $(document).bind('mousemove touchmove', function(e) {
                        if (opts.clicked) {
                            var pageX;
                            if (e.type == "touchmove") {
                                pageX = window.event.targetTouches[0].pageX;
                            } else {
                                pageX = e.pageX;
                            }

                            var width_step = 4;
                            if (Math.abs(opts.currPos - pageX) >= width_step) {
                                if (opts.currPos - pageX >= width_step) {
                                    opts.currImg++;
                                    if (opts.currImg > imageTotal) {
                                        opts.currImg = 1;
                                    }
                                } else {
                                    opts.currImg--;
                                    if (opts.currImg < 1) {
                                        opts.currImg = imageTotal;
                                    }
                                }
                                opts.currPos = pageX;
                                $obj.find(".imgshow").html('<img src="' + aImages[opts.currImg] + '" />');
                            }
                        }
                    });
                }
            });		
		});
	};
	$.fn.j360.defaults = {
		 clicked: false,
         currImg: 1
	}
})(jQuery);