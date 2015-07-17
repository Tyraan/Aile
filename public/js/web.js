/*整合产品、整合中心切换*/
jQuery(document).ready(function(){
	/*切换 start*/
	qieHuan('czkc_con_top','a','a1','czkc_con','czkc_con_a');
	function qieHuan(yspreclass,ys,ysclas,showpreclass,showclass){	//yspreclass--滑过元素所在层,ys--滑过的元素,ysclas-滑过的元素被选中时的class,showpreclass-要现实的层的上级元素,showclass--要显示的元素的class
	    //var nums = jQuery("."+yspreclass).children(ys).length ;
		jQuery("."+yspreclass).children(ys).each(function(){
				jQuery(this).hover(
						function(){
							jQuery(this).addClass(ysclas).siblings(ys).removeClass(ysclas);
							var thisnum = jQuery(this).index();
							//jQuery("."+showpreclass).children("."+showclass).eq(thisnum).show().siblings("."+showclass).hide();
							jQuery("."+showpreclass).children("."+showclass).eq(thisnum).removeClass('dis').siblings("."+showclass).addClass('dis');
						},
						function(){}
				)									 
		})
		
	}	
	/*切换 end*/
})