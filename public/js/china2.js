$(window).load(function(){  
 
	_initOpen2();  
	
	_initchina1();  
	
	_initShiting1(); 
	_initOpen3();

	    
});


function _initchina1(){

        _initchina1Province();
		
		_initchina1Over();
		

}


/*  left    */


function _initchina1Over(){
	
	   window.china1dt = $("#china1 dt");
       
	   window.chinddd = $("#china1 dd");

	   window.chinddd.hover(function(){
		  						   
            if(flag==1){ return false;}
			
			obj   =  $(this);		
								  
			$id   =  obj.attr("id");
			
			window.china1dt.addClass($id);
 
	  },function(){	
	  			   
		    if(flag==1){ return false;}	   
				   			
		    window.china1dt.removeClass();
		  
	  });

	  window.chinddd.click(function(){
		    
			
			 if(flag==1){ return false;}
		  
		  
	         $pid     =  parseInt($(this).attr("p"));	
			 
			 $pname   =  obj.html();
 
			 if($pid<=2000){
				  showchina1Cenerter($pid);
			 } 
			 else{
				  inlistShow($pid,$pname); 
			 }
			 
	  })  
}







// 背景
function _initchina1Over(){
	
	   window.china1dt = $("#china1 dt");
       
	   window.chinddd = $("#china1 dd");

	   window.chinddd.hover(function(){
		  						   
            if(flag==1){ return false;}
			
			obj   =  $(this);		
								  
			$id   =  obj.attr("id");
			
			window.china1dt.addClass($id);
 
	  },function(){	
	  			   
		    if(flag==1){ return false;}	   
				   			
		    window.china1dt.removeClass();
		  
	  });

	  window.chinddd.click(function(){
		    
			
			 if(flag==1){ return false;}
		  
		  
	         $pid     =  parseInt($(this).attr("p"));	
			 
			 $pname   =  obj.html();
 
			 if($pid<=2000){
				  showchina1Cenerter($pid);
			 } 
			 else{
				  inlistShow($pid,$pname); 
			 }
			 
	  })  
}

function inlistShow(pid,pname){
	
	
	  var maxprovinceid  = pid+20;
				   
	   var html          = '';

	   for(i in cityArray) 
	   {
			 if(i>maxprovinceid)
			 {
				  break;	 
			 }
		   
			 if(i>pid) 
			 {
				  html = html+'<span cid="'+i+'">'+cityArray[i]+'</span>';
			 }
	   }
 
     $lastHtml ='<h4>'+pname+' <span>X</span></h4><div id="in">'+html+'</div>';
    
	 $("#inlist").html($lastHtml);

	 // 显示
	 window.chinddd.hide();
	
     $("#inlist").fadeIn();

     // 关闭
	 $("#inlist h4 span").click(function(){
		  
	        $("#inlist").fadeOut(function(){
				
			    window.chinddd.show();
				
			});
	  })
	  
	  //绑定事件
	  $("#in span").click(function(){
					   
				       var $cid = $(this).attr("cid");
					   
					   $("#inlist").hide();
 
					   showchina1Cenerter($cid);	   	
	  })
	  
}







/*  right    */




// 显示城市
function _initchina1Province(){
        
		$("#china1province span").click(function(){
		       
			   var $pid = parseInt($(this).attr("pid"));	
 
			   if($pid<=2000){
				   
				  showchina1Cenerter($pid)
				   
			   } else {

			      showchina1City($pid);

				  $("#china1province dl span").removeClass("s")

				  $("#china1province dl").addClass("s");
				  
				  $(this).addClass("s");
				  
				  $("#china1citylist").insertAfter($(this).parent());
				  
			   } 
		})
} 


function showchina1City(pid){
	
                   var maxprovinceid = pid+20;
				   
				   var html          = '';

				   for(i in cityArray) 
				   {
					     if(i>maxprovinceid)
						 {
						      break;	 
						 }
					   
						 if(i>pid) 
						 {
							  html = html+'<span cid="'+i+'">'+cityArray[i]+'</span>';
						 }
				   }
				   
				   $("#china1citylist").html(html);

				   $("#china1citylist span").click(function(){
					   
				       var $cid = $(this).attr("cid");
					   
					   showchina1Cenerter($cid)
					   	
				   })

}


$(window).load(function(){  
 
 
	    
});

function _initOpen2(){
	
	  flag=1;
	 
	  $("#allow2").click(function(){
		  
	       if(flag==1){    
		   
		          $("#allow2").attr("title","չ���б�");     
				  
				  $("#allow2").html("չ���б�");  
			
			      $("#chinalist1").animate({right:-258},500); 
                  
				  flag=0;  
				  $("#allow2").addClass("allow1");
				  $("#allow2").removeClass("allow2");
				   window.chinddd.show();      
		     }else{         
				
				  $("#allow2").attr("title","�����б�"); 
				  
				  $("#allow2").html("�����б�");     
				
				  $("#chinalist1").animate({right:0},500); 
                  $("#allow2").addClass("allow2");
				  	  $("#allow2").removeClass("allow1");
				  flag=1;     
			 }
	  })
}





//右边省份选择

function showchina1Cenerter($pid){
	 
			if($pid<0){ return false;}
 
			    /*     ajax   */
			   $.get("/ajax/alllist/cityid/"+$pid,
			   function(data){
                     
					  data  = $.trim(data);
		 
					  window.dataObj=eval("("+data+")");   // 转化为josn 对像
	  
					  china1Show();
 
					  $("#allow2").click();  
		 
					  
					  if(window.leftshiting==1){
	 
					     showCenerter();
						 
					  }
  
		  
			   }); 
	            /*     ajax   */  

}

 
/*  china1Show  */
 
function china1Show(){
       
	   	var gymboreeobj   = window.dataObj.gymboree;
		
		var length        = gymboreeobj.length;
		
		var h             = '';
		
		var ii            = 0;
		
		var iii           = 0;

        for(var i=0;i<length;i++){
 
			var json   = gymboreeobj[i];
			
			    ii++;
			
			    if(ii<10){
				  
				   ii = "0"+ii;
				}
			    
				if(json.u){
					
			          h   = h+"<dd c='"+json.c+"'><span title='查看中心位置' onclick='javascript:mapto("+ii+");'>"+ii+"</span><a title='进入中心页面' href='/"+json.u+"'>"+json.n+"</a></dd>";
					  
				} else{
					
                      h   = h+"<dd c='"+json.c+"'><span class='t' title='查看店铺位置' onclick='javascript:mapto("+ii+");'>"+ii+"</span><a title='查看店铺位置' href='javascript:mapto("+ii+");'>"+json.n+"</a>【童装店�?</dd>";
					  
				}
		}
		
        // 右边显示
		var html ="<dl id='china1centerlist'><dt>金宝�?"+window.dataObj.city.cityname+"店铺�?<span></span></dt>"+h+"</dl>";
		 
	    $("#china1province").html(html);
		
		// 地图
 
		initMap();	
		
}

 //跳到门店
function mapto(ii){
	 
    ii--;
	
	var gymboreeobj   = window.dataObj.gymboree;
	
	var json          = gymboreeobj[ii];
	
	var p0            = json.p.split(",")[0];
            
    var p1            = json.p.split(",")[1];
	
	var point = new BMap.Point(p0,p1);
	
	map.zoomTo(17);
 
	map.panTo(point);
	
	// 显示信息
	var _iw      = createInfoWindow(ii);
	
	var current  = mymarker[ii]; 
	
	current.openInfoWindow(_iw);

	// 显示信息

}

// 选择试听中心

function setShiting(i){

    var gymboreeobj   = window.dataObj.gymboree;
	
	var json          = gymboreeobj[i];
	
	if(json.u){
 
		  $("#c").val(json.c);
		  
		  $("#centername").val(json.n);
		  
		  $("#centername").addClass("s");
	}

}
 
 
 
 
 



//创建和初始化地图函数�?
function initMap(){
        createMap();       //创建地图
        setMapEvent();     //设置地图事件
        addMapControl();   //向地图添加控�?
        addMarker();       //向地图中添加marker
}


 //创建地图函数�?
    function createMap(){
 
        GlobalPointX  =  window.dataObj.city.mappoint.split(",")[0];
		
		GlobalPointY  =  window.dataObj.city.mappoint.split(",")[1];
		
		zoom          =  parseInt(window.dataObj.city.zoom);
 
        map = new BMap.Map("china1");                                   //在百度地图容器中创建一个地�?
		
        var point = new BMap.Point(GlobalPointX,GlobalPointY);         //定义一个中心点坐标
		
        map.centerAndZoom(point,zoom);                          //设定地图的中心点和坐标并将地图显示在地图容器�?
	
		point=null;
    }
    
    //地图事件设置函数�?
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启�?(可不�?)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启�?(可不�?)
        map.enableKeyboard();//启用键盘上下左右键移动地�?
    }
    
    //地图控件添加函数�?
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
    	map.addControl(ctrl_nav);
	    ctrl_nav     = null;
     }
    
 
    //创建marker
    function addMarker(){
 
 	   	var gymboreeobj       =  window.dataObj.gymboree;
		
		var length            =  gymboreeobj.length;
		
		    mymarker          =  new Array();                   // 标注变量

        for(var i=0;i<length;i++){
			
            var json    = gymboreeobj[i];
            
			var p0      = json.p.split(",")[0];
            
			var p1      = json.p.split(",")[1];
            
			var point   = new BMap.Point(p0,p1);                         // 标注坐标
			
			var iconImg = createIcon(i,json.u);                          // 创建图标
			                 
            var marker  = new BMap.Marker(point,{icon:iconImg});         // 创建标注
			
			var iw      = createInfoWindow(i);                           // 创建信息�?
            
			map.addOverlay(marker);
       
			(function(){
				var index   = i;
				var _iw     = createInfoWindow(i);
				var _marker = marker;
				var json    = gymboreeobj[i];
			    var p0      = json.p.split(",")[0];
                var p1      = json.p.split(",")[1];

				// 全局变量
				mymarker[i]    = _marker;
				

				
				// 点击进出来信息框
				_marker.addEventListener("click",function(){
					
				    this.openInfoWindow(_iw);
					
					var point = new BMap.Point(p0,p1);
					
					map.zoomTo(17);
 
					map.panTo(point);
					
					setShiting(index);
 
			    });
				
			    _marker.addEventListener("mouseover",function(){
					
					this.openInfoWindow(_iw);
					
			    });
				
			})()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
   
         var gymboreeobj   = window.dataObj.gymboree;
   
         var json          = gymboreeobj[i];
 
 
         if(json.u){
		
				 var html = "<div class='baiducenter'><div class='img'><a title='进入中心页面' href='/" + json.u + "'> \
							  <img src='" + json.d + "' width='130' height='85' /></a></div> \
							  <div class='title'><p><a title='进入中心页面' href='/" + json.u + "'>" + json.n + "</a></p> \
							  <p>" + json.a + "</p></div></div>"
		 
		 } else{
			 
		 		 var html = "<div class='baiducenter'><div class='img'> \
		              <img alt='" + json.n + "' src='" + json.d + "' width='130' height='85' /></div> \
		              <div class='title'><p><b>" + json.n + "</b></p> \
					  <p>" + json.a + "</p></div></div>"
		 
		  }
 		  		  
		  var iw   = new BMap.InfoWindow(html);
 
          return iw;
    }
	
    //创建一个Icon
    function createIcon(i,u){
	
	    var  ii  = i*-26; 
		
		if(u!=''){
		 	
		   icon = 'markers';
		
		} else{
			
		   icon = 'markersshop';
		}
		
        var icon = new BMap.Icon("/images/china1/"+icon+".png", new BMap.Size(21,26),{imageOffset:new BMap.Size(0,ii)})
		
        return icon;
    }
	
	
/****************************************************** 试听 **************************************************************************/

function _initShiting1(){
	
	
	// 是否激活左边试�?
	window.leftshiting = 0;
	
	
    _initCentername();
	
    _initSex();
	
	_initHope();
	
	_initQudao();
	
	_initCode();
 
}


//提交认证
function shitingcheck(obj){
	
	  var centername = $("#centername").val();
	
      var centercode = $("#c").val();
	  
	  var babyname   = $.trim($("#babyname").val());
	  
	  var year       = $("#year").val();
	  
	  var month      = $("#month").val();
	  
	  var mobile     = $("#mobile").val();
	  
	  var hopedate   = $("#hopedate").val();
	  
	  var qudao      = $("#qudao").val();
	  
	  var code       = $("#code").val();
	  
	  if(centercode==0){
		  
		  alert("【试听中心】不能为�?");
		  
	      return false;
		  
	  } 
 
	  if(babyname==""){
		  
		  alert("【宝宝姓名】不能为�?");
		  
		  $("#babyname").focus();
		  
	      return false;
	  }
	  

	  if(year==0)
	  {
		   alert("【宝宝生日】不能为�?");
 
		   return false;
	  }
	  
	  if(month==0)
	  {
		   alert("【宝宝生日】不能为�?");
 
		   return false;
	  }
	  
	  if(mobile.length!=11)
	  {
		  alert("【联系手机号】有�?");
				   
		  $("#mobile").focus();		   
				   
		  return false;
	  }
	  
	  if(hopedate==""){

	   	  alert("【试听时间】不能为�?");
				   
		  return false;
	  }
	
      if(qudao==0){
		  
	      alert("【知晓渠道】不能为�?");
				   
		  return false;
	  
	  }

      if(code==""){
		  
	      alert("【验证码】不能为�?");
				   
		  return false;
	  }

          
          
	  
       if(confirm('为方便联系您，请确认申请信息！\n 中心名称：�?'+centername+'�? \n 联系方式：�?'+mobile+'�?'))
	   {
					return true; 
	   }
	   else
	   {
					return false; 
	   }



	  alert(centercode);
   
      return false;
      

} 
 



 

function _initCentername(){
	
    $("#centername").click(function(){
		
		   var size       =   $("#province").size();

		    if(size>0){
			   
			      $("#province").show();
			   
		    }else{
 	  
		    $provinceHmtl =  "<div id='province'> \
                              <dl><dt>请先选择您所在省�?/城市�?<span></span> <i title='关闭' id='pclose'>X</i></dt> \
                              <dd>直辖�? <span pid='500'>北京</span><span pid='1000'>上海</span><span pid='1500'>天津</span> \
							  <span pid='2000'>重庆</span></dd> \
                              <dd>华北�? <span pid='8000'>河北</span><span pid='8500'>山西</span><span  pid='7500'>河南</span></dd>  \
                              <dd>东北�? <span pid='5000'>辽宁</span><span  pid='9500'>吉林</span> \
							  <span  pid='9000'>内蒙</span><span pid='4500'>山东</span><span pid='10000'>黑龙�?</span></dd>  \
                              <dd>华东�? <span pid='4000'>江苏</span><span pid='10500'>安徽</span><span pid='3500'>浙江</span> \
							  <span pid='3000'>福建</span></dd>  \
                              <dd>华中�? <span pid='7000'>湖北</span> <span pid='11000'>湖南</span><span pid='5500'>江西</span></dd>  \
                              <dd>华南�? <span pid='2500'>广东</span> <span pid='11500'>广西</span> <span pid='12000'>海南</span></dd> \
                              <dd>西南�? <span pid='6000'>四川</span> <span pid='13000'>贵州</span> <span pid='12500'>云南</span></dd> \
                              <dd>西北�? <span pid='6500'>陕西</span> <span pid='14000'>甘肃</span><span pid='14500'>宁夏</span> \
							  <span pid='15500'>新疆</span></dd>  \
                              <dd  id='citylist'></dd></dl>\
                              </div>"	
							  		  
		                      $("#shiting").append($provinceHmtl); 
		 
							  $("#pclose").click(function(){
						
									$("#province").remove();		  
							  })
	 
							 _initProvince();
	  
		   }
		   
	})	
}
 
// 显示城市
function _initProvince(){
        
		$("#province span").click(function(){
		       
			   var $pid = parseInt($(this).attr("pid"));	
 
			   if($pid<=2000){
				 			  
			      // 设置左边触发
				  window.leftshiting = 1		
 		  
				  //地图片显�?
				  showchina1Cenerter($pid);
 
   
			   } else {

			      showCity($pid);

				  $("#province dl span").removeClass("s")

				  $("#province dl").addClass("s");
				  
				  $(this).addClass("s");
				  
				  $("#citylist").insertAfter($(this).parent());
			   } 
		})	
} 

function showCity(pid){
	
                   var maxprovinceid = pid+20;
				   
				   var html          = '';

				   for(i in cityArray) 
				   {
					     if(i>maxprovinceid)
						 {
						      break;	 
						 }
					   
						 if(i>pid) 
						 {
							  html = html+'<span cid="'+i+'">'+cityArray[i]+'</span>';
						 }
				   }
				   
				   $("#citylist").html(html);

				   $("#citylist span").click(function(){
					   
				       var $cid = $(this).attr("cid");
					  
					   // 设置左边触发
					   window.leftshiting = 1
					   			   
					   //地图片显�?
				       showchina1Cenerter($cid);

				   })
}
 

 
function showCenerter(){
 
     var gymboreeobj   = window.dataObj.gymboree;
		
	 var length        = gymboreeobj.length;
	 
	 var h             = ''; 
 
	 for(var i=0;i<length;i++){

		    var json   = gymboreeobj[i];
			
			if(json.u){
	        
		   	    h      = h+"<dd i='"+i+"' c='"+json.c+"' title='申请试听'>"+json.n+"</dd>";
			}
	 }
 
 
	 html  = "<dl id='centerlist'><dt>请选择您试听中心：<span></span><i title='关闭' id='pclose'>X</i></dt>"+h+"</dl>";
	
	                  $("#province").html(html);

					  selectShiting();
					   
					  // 关闭事件
					  $("#pclose").click(function(){
						
							$("#province").hide();		  
					  })
} 


// 选择试听中心
function selectShiting(){
	
		$("#centerlist dd").click(function(){
			
			var $c          =  $(this).attr("c");
			
			var $i          =  $(this).attr("i");
			
			var $centername =  $(this).html();

			$("#centerlist dd").removeClass("s");
			
			$(this).addClass("s");
			
			$("#c").val($c);
			
			$("#centername").val($centername);
			
			$("#centername").addClass("s");
			
			$("#province").hide();
	 
			 // 地图跳转
			 $i++;
		 	 mapto($i);
		
		}) 
}




 
 
function _initSex(){
	

     $("#shiting span.radio").click(function(){
 
		   $datatype   =  $(this).attr("datatype");
		   
		   $datevalue  =  $(this).attr("datevalue");
 
		   $(".radio[datatype="+$datatype+"]").removeClass("radioselect");
		   
		   $(this).addClass("radioselect");
		   
		   $("#"+$datatype).val($datevalue);
	 })

}


function _initQudao(){
	
	 $("#shiting span.checkbox").click(function(){
 
		   $datatype   =  $(this).attr("datatype");
		   
		   $datevalue  =  $(this).attr("datevalue");
		   
		   $value      =  $("#"+$datatype).val();
 
		   if($value==1){
			
			  $(this).removeClass("checkboxselect");
			
			  $("#"+$datatype).val('0');
			
		   } else {
			   
		      $(this).addClass("checkboxselect");
			 
			  $("#"+$datatype).val('1');
		   }
	 })	
}


function _initHope(){
	
     $("#hopedate").click(function(){

	 		   var size       =   $("#hope").size();

		    if(size>0){
			   
			      $("#hope").show();
			   
		    }else{
	
					  /*     ajax   */
					 $.get("/ajax/shitinghope/",
					 function(data){
						   
							data  = $.trim(data);
						   
						    $Hmtl =  "<div id='hope'><dl><dt>您希望试听日�?<span></span><i id='hclose'>X</i></dt>"+data+"</dl></div>";
							
							$("#shiting").append($Hmtl); 
							
							selectHope();
							
					 }); 
					  /*     ajax   */  		
			}
	 })
}


function selectHope(){
	

    		// 效果
					 $("#hope dd").hover(function() {
						
					   var $d  = $(this).html();	
					   
					   var $w  = $(this).attr("w");	
					   
					   $(this).html($w);
					   
					   $(this).attr("w",$d);
					   
                       $(this).addClass("s");

                     },function() {
						 
					   var $d  = $(this).html();	
					   
					   var $w  = $(this).attr("w");	
					   
					   $(this).html($w);
					   
					   $(this).attr("w",$d); 
						
                       $(this).removeClass("s");
					   
                     });
					 
					// 点击
					$("#hope dd").click(function(){
						
						var $w  = $(this).html();
						
						var $d  = $(this).attr("w");	
						
						$("#hopedate").val($d+"/"+$w);
						
						$("#hope").hide();
						
						$("#hope dd").removeClass("ss");
						
						$(this).addClass("ss");
					}) 
					
					// 关闭事件
				    $("#hclose").click(function(){
						
							$("#hope").hide();		  
				    })


}



function _initCode(){
	
      
	   $("#createcode").click(function(){
		   
	        	var cnum=Math.ceil(Math.random()*10);

	                $("#codeimg").attr("src","/multi/code.php?p="+cnum);
	   
	   })
 
}// JavaScript Document


function _initOpen3(){
	
	
		   
		          $("#allow2").attr("title","չ���б���");     
				  
				  $("#allow2").html("չ���б�");  
			
			      $("#chinalist1").animate({right:-258},500); 
				   flag=0;  
window.chinddd.show(); 
$("#china1 dt").show();	
$("#china1 dd").show();	

		 
	 
}




