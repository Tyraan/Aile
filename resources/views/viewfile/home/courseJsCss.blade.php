
<link rel="shortcut icon" type="image/x-icon" href="/img/aileguoji.ico" media="screen" />
<link rel="stylesheet" type="text/css" href="/css/my.css">
<script src="/js/tongyign.js"type="text/javascript"></script>
<script type="text/javascript" src="/js/my.js"></script>
<script class="resources library" src="/js/area.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	$(".def-nav,.info-i").hover(function(){
		$(this).find(".pulldown-nav").addClass("hover");
		$(this).find(".pulldown").show();
	},function(){
		$(this).find(".pulldown").hide();
		$(this).find(".pulldown-nav").removeClass("hover");
	});
	
});


//二维码弹出
function tcc_show()
{
       var yincang=document.getElementById("alck_ewm1");
       if(yincang.style.display=='block')
              yincang.style.display='none';//block表示显示
       else
               yincang.style.display='block';//none表示隐藏
}
function tcc_show1()
{
       var yincang=document.getElementById("alck_ewm2");
       if(yincang.style.display=='block')
              yincang.style.display='none';//block表示显示
       else
               yincang.style.display='block';//none表示隐藏
}
//弹出视频
function tcc_show_sp()
{
       var yincang=document.getElementById("alkc_sp_da");
       if(yincang.style.display=='block')
              yincang.style.display='none';//block表示显示
       else
               yincang.style.display='block';//none表示隐藏
}
</script>
<link type="text/css" href="/css/style10_15.css" rel="stylesheet">
<script type="text/javascript" src="/js/jquery-1.9.1.js" ></script>
<script type="text/javascript" src="/js/date1.js" ></script>
<script type="text/javascript" src="/js/iscroll.js" ></script>
<script type="text/javascript">
/*$(function(){
	$('#beginTime').date();
	$('#endTime').date({theme:"datetime"});
});*/
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?287002be1059509e17e9225067ddb064";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<script type="text/javascript">
function getb($birthday){
  
        var   r   =   $birthday.match(/^(\d{1,4})(-|\/)(\d{1,2})\2(\d{1,2})$/);     
        if(r==null)return   false;     
        var   d=   new   Date(r[1],   r[3]-1,   r[4]);     
        if   (d.getFullYear()==r[1]&&(d.getMonth()+1)==r[3]&&d.getDate()==r[4])   
        {   
              var   Y   =   new   Date().getFullYear();   
              return("年龄   =   "+   (Y-r[1])   +"   周岁");   
        }   
        return("输入的日期格式错误！");   


}
</script>

<script>
$(document).ready(function(){

  $('#subform').click(function(){
    $('#light').css('display','block');
    
  })
  });
</script>

<script>
          
function yz(){
    var birthday=document.getElementById("birthday").value;     
     if( birthday=='选择宝宝出生日期' ){  
                alert("选择宝宝出生日期!");                   
                  return false;
               } else{    
     $.ajax({
     
    type:'get',
    url:"/handcourse.php",

     
  });
        
    }
      
  
}


</script> 

<script type="text/javascript">
var Gid  = document.getElementById ;
var showArea = function(){
  Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +  
  Gid('s_city').value + " - 县/区" + 
  Gid('s_county').value + "</h3>"
              }
Gid('s_county').setAttribute('onchange','showArea()');
</script>

 <!--城市 end-->   

                
                <!--出生日期js开始-->        
      <script type="text/javascript" language="javascript">
                            var curdate = new Date();
                            var year = document.getElementById("year");
                            var month = document.getElementById("month");
                            var day = document.getElementById("day");
                            //绑定年份月分的默认
                            function add() {
                                var curyear = curdate.getFullYear();
                                var minyear = curyear - 14;
                                var maxyear = curyear + 0;
        for (maxyear; maxyear >= minyear; maxyear = maxyear - 1) {
                                    year.options.add(new Option(maxyear, maxyear));
                                }
                                for (var mindex = 1; mindex <= 12; mindex++) {
                                    month.options.add(new Option(mindex, mindex));
                                }
                            }

                            //判断是否是闰年
                            function leapyear(intyear) {
                                var result = false;
                                if (((intyear % 400 == 0) && (intyear % 100 != 0)) || (intyear % 4 == 0)) {
                                    result = true;
                                }
                                else {
                                    result = false;
                                }
                                return result;
                            }
                            //绑定天数
                            function addday(maxday) {
                                day.options.length = 1;
                                for (var dindex = 1; dindex <= maxday; dindex++) {
                                    day.options.add(new Option(dindex, dindex));
                                }
                            }
                            function changeday() {
                                if (year.value == null || year.value == "") {
                                    alert("请先选择年份！");
                                    return false;
                                }
                                else {
                                    if (month.value == 1 || month.value == 3 || month.value == 5 || month.value == 7 || month.value == 8 || month.value == 10 || month.value == 12) {
                                        addday(31);
                                    }
                                    else {
                                        if (month.value == 4 || month.value == 6 || month.value == 9 || month.value == 11) {
                                            addday(30);
                                        }
                                        else {
                                            if (leapyear(year.value)) {
                                                addday(29);
                                            }
                                            else {
                                                addday(28);
                                            }
                                        }
                                    }
                                }
                            }
                            window.onload = add;
                        </script> 

                        <script type="text/javascript" charset="utf-8" src="http://lead.soperson.com/20000301/10045318.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?61de223b614ba7d411dac108b01a95fd";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
