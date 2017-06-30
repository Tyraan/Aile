<link rel="stylesheet" type="text/css" href="css/global.css" />
<link rel="stylesheet" type="text/css" href="css/page.css" />
<script src="/js/jquery-1.7.2.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/jquery.transit.min.js"></script>
<script src="/js/fun.js"></script>
<script src="/js/global.js"></script>
<script src="js/plus/jquery.mScroll.js"></script>
<script src="js/plus/sHover.min.js"></script>
<!-- 加盟和课程弹出页代码 -->
<script type="text/javascript" charset="utf-8" src="http://lead.soperson.com/20000301/10045318.js"></script>
<SCRIPT LANGUAGE="JavaScript">
function mobile_device_detect(url)
{

        var thisOS=navigator.platform;

        var os=new Array("iPhone","iPod","android","Nokia","SymbianOS","Symbian","Windows Phone","Phone","Linux armv71","MAUI","UNTRUSTED/1.0","Windows CE","BlackBerry","IEMobile");

 for(var i=0;i<os.length;i++)
        {

 if(thisOS.match(os[i]))
        {   
  window.location=url;
 }
  
 }
 //做这一部分是因为Android手机的内核也是Linux
 //但是navigator.platform显示信息不尽相同情况繁多,因此从浏览器下手，即用navigator.appVersion信息做判断
  var check = navigator.appVersion;

  if( check.match(/linux/i) )
          {
   //X11是UC浏览器的平台 ，如果有其他特殊浏览器也可以附加上条件
   if(check.match(/mobile/i) || check.match(/X11/i))
                 {
   window.location=url;
   }  
 }

 //类in_array函数
 Array.prototype.in_array = function(e)
 {
  for(i=0;i<this.length;i++)
  {
   if(this[i] == e)
   return true;
  }
  return false;
 }
} 
mobile_device_detect("http://www.ilovegym.com/mobile/");
</SCRIPT>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?287002be1059509e17e9225067ddb064";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

