// JavaScript Document
//图片上翻效果

(function($) {
	$.fn.imgTurn = function(options) {
		var opts = $.extend({},$.fn.imgTurn.defaults,options); 
		//初始化
		var z = 0;
		var f=$(this);
		var inAnimation = false;
		f.find('img').each(function() {
			z++;
			$(this).css('z-index', z)
		});
		function swapFirstLast(isFirst) {
			if (inAnimation) return false;
			else inAnimation = true;
			var processZindex, direction, newZindex, inDeCrease;
			if (isFirst) {
				processZindex = z;
				direction = '-';
				newZindex = 1;
				inDeCrease = 1
			} else {
				processZindex = 1;
				direction = '';
				newZindex = z;
				inDeCrease = -1
			}
			f.find('img').each(function() {
				if ($(this).css('z-index') == processZindex) {
					$(this).animate({
						'top': direction + $(this).height() + 'px'
					},
					'slow',
					function() {
						$(this).css('z-index', newZindex).animate({
							'top': '0'
						},
						'slow',
						function() {
							inAnimation = false
						})
					})
				} else {
					$(this).animate({
						'top': '0'
					},
					'slow',
					function() {
						$(this).css('z-index', parseInt($(this).css('z-index')) + inDeCrease)
					})
				}
			});
			return false
		}
		$(opts.next).click(function() {
			return swapFirstLast(true)
		});
		$(opts.prev).click(function() {
			return swapFirstLast(false)
		});
		f.find('img').click(function(){
			return swapFirstLast(true)
		});
	};
	$.fn.imgTurn.defaults = {
		auto : 1,
		prev : '',
		next : ''
	}
})(jQuery);