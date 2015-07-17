/*爱乐招聘详情——切换*/
jQuery(document).ready(function(){
	/*切换 start*/
	qieHuan('alzp_xq_con1_top','a','a1','alzp_xq_con1','alzp_xq_con1_con');
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




/*爱乐空间——切换*/
jQuery(document).ready(function(){
	/*切换 start*/
	qieHuan('alkj_con_1_left_top','a','a1','alkj_con_1_left','alkj_con_1_left_con');
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


/*爱乐空间活动——切换*/
jQuery(document).ready(function(){
	/*切换 start*/
	qieHuan('alkjhd_con_1_right_top','a','a1','alkjhd_con_1_right','alkjhd_con_1_right_con');
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






/*品牌活动*/
jQuery(document).ready(function(){
	/*切换 start*/
	qieHuan('pphd_con1_top','a','a1','pphd_con1','pphd_con1_a');
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



/*加盟爱乐-切换*/
function jmal(){
 document.getElementById('jmal_tanchuceng').style.display='block';  
}
function jmal_1(){
 document.getElementById('jmal_tanchuceng').style.display='none';  
}

function jmal2(){
 document.getElementById('jmal_tanchuceng1').style.display='block';  
}
function jmal2_1(){
 document.getElementById('jmal_tanchuceng1').style.display='none';  
}

function jmal3(){
 document.getElementById('jmal_tanchuceng2').style.display='block';  
}
function jmal3_1(){
 document.getElementById('jmal_tanchuceng2').style.display='none';  
}

function jmal4(){
 document.getElementById('jmal_tanchuceng3').style.display='block';  
}
function jmal4_1(){
 document.getElementById('jmal_tanchuceng3').style.display='none';  
}
function jmal5(){
 document.getElementById('jmal_tanchuceng4').style.display='block';  
}
function jmal5_1(){
 document.getElementById('jmal_tanchuceng4').style.display='none';  
}


/*2014-10-22*/

function zhxx_qh_a(){
 document.getElementById('zhxx_qh_a').style.display='block'; 
  document.getElementById('zhxx_qh_b').style.display='none';
 
}

function zhxx_qh_b(){
 document.getElementById('zhxx_qh_b').style.display='block'; 
  document.getElementById('zhxx_qh_a').style.display='none';   
}

function zhxx_qh_a1(){
 document.getElementById('zhxx_qh_a1').style.display='block'; 
  document.getElementById('zhxx_qh_a2').style.display='none';
 
}

function zhxx_qh_a2(){
 document.getElementById('zhxx_qh_a2').style.display='block'; 
  document.getElementById('zhxx_qh_a1').style.display='none';   
}

function zhxx_qh_b1(){
 document.getElementById('zhxx_qh_b1').style.display='block'; 
  document.getElementById('zhxx_qh_b2').style.display='none';
 
}

function zhxx_qh_b2(){
 document.getElementById('zhxx_qh_b2').style.display='block'; 
  document.getElementById('zhxx_qh_b1').style.display='none';   
}


/*会员专区*/
jQuery(document).ready(function(){
	/*切换 start*/
	qieHuan('hyzq_right_up1','a','a1','hyzq_right_uv1','hyzq_con2');
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




