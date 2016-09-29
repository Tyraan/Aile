/*
*	全国三级城市联动 js版
*/
function Dsy(){
	this.Items = {};
}
Dsy.prototype.add = function(id,iArray){
	this.Items[id] = iArray;
}
Dsy.prototype.Exists = function(id){
	if(typeof(this.Items[id]) == "undefined") return false;
	return true;
}

function change(v){
	var str="0";
	for(i=0;i<v;i++){
		str+=("_"+(document.getElementById(s[i]).selectedIndex-1));
	};
	var ss=document.getElementById(s[v]);
	with(ss){
		length = 0;
		options[0]=new Option(opt0[v],opt0[v]);
		if(v && document.getElementById(s[v-1]).selectedIndex>0 || !v){
			if(dsy.Exists(str)){
				ar = dsy.Items[str];
				for(i=0;i<ar.length;i++){
					options[length]=new Option(ar[i],ar[i]);
				}//end for
				if(v){ options[0].selected = true; }
			}
		}//end if v
		if(++v<s.length){change(v);}
	}//End with
}

var dsy = new Dsy();

dsy.add("0",["北京市","天津市","重庆市","河北省","山西省","内蒙古","浙江省","河南省","湖北省","湖南省","广东省","四川省","云南省",/*"陕西省",*/"江苏省","安徽省","吉林省"]);
dsy.add("0_0_0",["爱乐乐享大悦城中心","爱乐乐享龙湖中心","北京大峡谷中心","北京富力中心","北京方庄新业中心","北京常营中心","北京回龙观中心","北京广安门中心","北京西直门中心","北京亚奥中心","北京通州中心","北京学院路中心"]);
dsy.add("0_0",["北京市"]);
dsy.add("0_1_0",["远洋中心","爱乐乐享凯德.天津湾中心"]);
dsy.add("0_1",["天津市"]);

dsy.add("0_2_0",["龙湖中心"]);
dsy.add("0_2",["重庆市"]);

dsy.add("0_3_0",["天山海世界中心"]);
dsy.add("0_3_1",["荣盛国际广场中心"]);
dsy.add("0_3_2",["爱乐乐享怡然城中心"]);
dsy.add("0_3",["石家庄市","沧州市","衡水市"]);


dsy.add("0_4_0",["临汾中心"]);
dsy.add("0_4_1",["爱乐乐享吕梁中心"]);
dsy.add("0_4",["临汾市","吕梁市"]);

dsy.add("0_5_0",["万达广场中心"]);
dsy.add("0_5_1",["爱乐乐享巴彦淖尔中心"]);
dsy.add("0_5",["赤峰市","巴彦淖尔市"]);

dsy.add("0_6_0",["柯桥中心","爱乐乐享上虞中心"]);
dsy.add("0_6",["绍兴市"]);


dsy.add("0_7_0",["盛唐至尊中心"]);
dsy.add("0_7_1",["财富广场中心"]);
dsy.add("0_7_2",["新天下中心"]);
dsy.add("0_7_3",["爱乐乐享万科城中心"]);
dsy.add("0_7_4",["爱乐乐享辉县中心"]);
dsy.add("0_7",["洛阳市","濮阳市","许昌市","郑州市","新乡市"]);

dsy.add("0_8_0",["徐东新世界东中心"]);
dsy.add("0_8_1",["爱乐乐享湖北荆州人信汇中心"]);
dsy.add("0_8_2",["爱乐乐享湖北黄石市大冶中心"]);
dsy.add("0_8",["武汉市","荆州市","黄石市"]);

dsy.add("0_9_0",["长沙汇金国际中心"]);
dsy.add("0_9_1",["衡阳西湖中心","衡阳祁东中心"]);
dsy.add("0_9",["长沙市","衡阳市"]);

dsy.add("0_10_0",["宝安体育中心","龙岗中心"]);
dsy.add("0_10_1",["广东梅州中心"]);
dsy.add("0_10",["深圳市","梅州市"]);

dsy.add("0_11_0",["爱乐乐享凯德天府中心","爱乐乐享光华中心"]);
dsy.add("0_11",["成都市"]);

dsy.add("0_12_0",["昆明同德广场中心"]);
dsy.add("0_12",["昆明市"]);

/*dsy.add("0_13_0",["西安经开中心"]);
dsy.add("0_13",["西安市"]);*/

dsy.add("0_13_0",["爱乐乐享奥体G53中心","爱乐乐享金鹰中心"]);
dsy.add("0_13_1",["爱乐乐享缇香广场中心"]);
dsy.add("0_13",["南京市","张家港市"]);

dsy.add("0_14_0",["爱乐乐享合肥中心"]);
dsy.add("0_14",["合肥市"]);

dsy.add("0_15_0",["爱乐乐享七彩城中心"]);
dsy.add("0_15",["长春市"]);

dsy.add("0",["北京市","天津市","重庆市","河北省","山西省","内蒙古","浙江省","河南省","湖北省","湖南省","广东省","四川省","云南省",/*"陕西省",*/"江苏省","安徽省","吉林省"]);
var s=["s_province","s_city","s_county"];//三个select的name
var opt0 = ["省份","地级市","预约中心"];//初始值
function _init_area(){  //初始化函数
	for(i=0;i<s.length-1;i++){
	  document.getElementById(s[i]).onchange=new Function("change("+(i+1)+")");
	}
	change(0);
}
