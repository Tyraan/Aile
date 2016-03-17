<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>爱乐乐享 爱乐国际早教中心--亲子早教|儿童早教|ilovegym|全球最具专业的早教课程体系</title>
		<meta name="keywords" content="国际早教|北京早教|早教中心|早教机构|早教加盟|亲子早教|爱乐|爱乐国际早教中心|爱乐早教|早期教育|爱乐国际早教|儿童早教|早教 ">
		<meta name="description" content="爱乐国际早教是全球最具专业的早教课程体系，集亲子早教、儿童早教、早期教育及幼教、早教加盟为一体的专业早教机构，30年的国际历  史，全国50家高品质中心，六大课程体系覆盖0-8岁，十万家庭的共同选择。先进的教育理念、专业的早教团队，科学的儿童课程，促进宝宝  健康成长。">
		@include('viewfile/home/courseJsCss')
	</head>
	<body  onload="setup()">
	   <div class="kc_beija">
		@include("GeneralHeader")		
		@include("viewfile/home/courseBody")
		
@include("foot")
<!--点击弹出视频-->
<div class="alkc_sp" id="alkc_sp_da" >

     <div class="alkc_sp_con">
          <!-- 代码 开始 -->
            <div class="sjqeka" onClick="tcc_show_sp()"><img src="/img/tachuguanbi.png"></div>
            <object class id="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="1026" height="574">
              <param name="movie" value="/templates/default/flvplayer.swf">
              <param name="quality" value="high">
              <param name="allowFullScreen" value="true">
              <param name="FlashVars" value="vcastr_file=/img/lfjysp.flv&LogoText=www.lanrentuku.com&BufferTime=3&IsAutoPlay=1">
              <embed src="/templates/default/flvplayer.swf" allowfullscreen="true" flashvars="vcastr_file=/img/lfjysp.flv&LogoText=www.lanrentuku.com&IsAutoPlay=1" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="1026" height="574"></embed>
            </object>
            <!-- 代码 结束 -->
     </div>
</div>
</body>
</html>
