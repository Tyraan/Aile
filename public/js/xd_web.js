/*������Ƹ���顪���л�*/
jQuery(document).ready(function(){
	/*�л� start*/
	qieHuan('alzp_xq_con1_top','a','a1','alzp_xq_con1','alzp_xq_con1_con');
	function qieHuan(yspreclass,ys,ysclas,showpreclass,showclass){	//yspreclass--����Ԫ�����ڲ�,ys--������Ԫ��,ysclas-������Ԫ�ر�ѡ��ʱ��class,showpreclass-Ҫ��ʵ�Ĳ���ϼ�Ԫ��,showclass--Ҫ��ʾ��Ԫ�ص�class
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
	/*�л� end*/
})




/*���ֿռ䡪���л�*/
jQuery(document).ready(function(){
	/*�л� start*/
	qieHuan('alkj_con_1_left_top','a','a1','alkj_con_1_left','alkj_con_1_left_con');
	function qieHuan(yspreclass,ys,ysclas,showpreclass,showclass){	//yspreclass--����Ԫ�����ڲ�,ys--������Ԫ��,ysclas-������Ԫ�ر�ѡ��ʱ��class,showpreclass-Ҫ��ʵ�Ĳ���ϼ�Ԫ��,showclass--Ҫ��ʾ��Ԫ�ص�class
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
	/*�л� end*/
})


/*���ֿռ������л�*/
jQuery(document).ready(function(){
	/*�л� start*/
	qieHuan('alkjhd_con_1_right_top','a','a1','alkjhd_con_1_right','alkjhd_con_1_right_con');
	function qieHuan(yspreclass,ys,ysclas,showpreclass,showclass){	//yspreclass--����Ԫ�����ڲ�,ys--������Ԫ��,ysclas-������Ԫ�ر�ѡ��ʱ��class,showpreclass-Ҫ��ʵ�Ĳ���ϼ�Ԫ��,showclass--Ҫ��ʾ��Ԫ�ص�class
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
	/*�л� end*/
})






/*Ʒ�ƻ*/
jQuery(document).ready(function(){
	/*�л� start*/
	qieHuan('pphd_con1_top','a','a1','pphd_con1','pphd_con1_a');
	function qieHuan(yspreclass,ys,ysclas,showpreclass,showclass){	//yspreclass--����Ԫ�����ڲ�,ys--������Ԫ��,ysclas-������Ԫ�ر�ѡ��ʱ��class,showpreclass-Ҫ��ʵ�Ĳ���ϼ�Ԫ��,showclass--Ҫ��ʾ��Ԫ�ص�class
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
	/*�л� end*/
})



/*���˰���-�л�*/
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


/*��Աר��*/
jQuery(document).ready(function(){
	/*�л� start*/
	qieHuan('hyzq_right_up1','a','a1','hyzq_right_uv1','hyzq_con2');
	function qieHuan(yspreclass,ys,ysclas,showpreclass,showclass){	//yspreclass--����Ԫ�����ڲ�,ys--������Ԫ��,ysclas-������Ԫ�ر�ѡ��ʱ��class,showpreclass-Ҫ��ʵ�Ĳ���ϼ�Ԫ��,showclass--Ҫ��ʾ��Ԫ�ص�class
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
	/*�л� end*/
})




