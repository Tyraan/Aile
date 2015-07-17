 function imgLocation(){
	 var box = $(".box");
	 var boxWidth = box.eq(0).width();
	 var num = Math.floor($(window).width/boxWidth);
	 var boxArr=[];
	 box.each(function(index,value){
		 var boxHeight = box.eq(index).height();
		 if(index<num){
			 boxArr[index] = boxHeight;
			  
		 }else{
			var minboxHeight = Math.min.apply(null,boxArr);
			var minboxIndex = $.inArray(minboxHeight,boxArr);
			$(value).css({
				"position" :"absolute",
				"top":minboxHeight,
				"left":min(minboxIndex).position().left
			});
			boxArr[minboxIndex]+= box.eq(index).height();			
		 }
	 });
 }
 
 function tj(){
			
   	        var babyname=document.getElementById("babyname").value;
			var mobile=document.getElementById("mobile").value;
		
			 var year=document.getElementById("year").value;
			 var month=document.getElementById("month").value;
			  var day=document.getElementById("day").value;
			var s_province=document.getElementById("s_province").value;
		
			var s_city=document.getElementById("s_city").value;
			var s_county=document.getElementById("s_county").value;
	 
           if( babyname=='' ){  
                alert("请输入宝宝名称!");
                    document.kechengsave.babyname.focus();
                  return false;
               }else if( year =='年' ){  
                alert("请输入出生年份!");
                    document.kechengsave.year.focus();
                  return false;
               }else if( month =='月' ){  
                alert("请输入出生月份!");
                    document.kechengsave.month.focus();
                  return false;
               }else if( day =='日' ){  
                alert("请输入出生日期!");
                    document.kechengsave.day.focus();
                  return false;
               }else if( mobile=='' ){  
                alert("请输入手机号码!");
                    document.kechengsave.mobile.focus();
                  return false;
               }else if( mobile.length!=11 ){  
                alert("请输入正确的手机号码!");
                    document.kechengsave.mobile.focus();
                  return false;
               }else if(  s_province=='省份'  ){  
                alert("请选择省份!");
                    document.kechengsave.s_province.focus();
                  return false;
               }else if(  s_city=='地级市'  ){  
                alert("请选择地级市!");
                    document.kechengsave.s_city.focus();
                  return false;
               }else if(  s_county=='预约中心'  ){  
                alert("请选择预约中心!");
                    document.kechengsave.s_county.focus();
                  return false;
               }else{
				return document.getElementById('kechengsave').submit();   
			   }
			  
	
           }
	   
