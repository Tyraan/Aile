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

dsy.add("0",["北京市","天津市","重庆市","河北省","山西省","内蒙古","浙江省","河南省","湖北省","湖南省","广东省","四川省","云南省","陕西省"]);
dsy.add("0_0_0",["北京富力中心","北京朝阳大悦城中心","北京大峡谷中心","北京方庄新业中心","北京健翔中心","北京通州中心","北京西直门中心","北京广安门中心","北京亚奥中心","北京学院路中心","北京常营中心","北京回龙观中心"]);
dsy.add("0_0",["北京市"]);
dsy.add("0_1_0",["天津远洋中心"]);
dsy.add("0_1",["天津市"]);

dsy.add("0_2_0",["重庆龙湖中心"]);
dsy.add("0_2",["重庆市"]);

dsy.add("0_3_0",["河北石家庄中心"]);
dsy.add("0_3",["石家庄市"]);

dsy.add("0_4_0",["爱乐国际早教临汾中心"]);
dsy.add("0_4",["临汾市"]);

dsy.add("0_5_0",["内蒙古赤峰中心"]);
dsy.add("0_5",["赤峰市"]);

dsy.add("0_6_0",["浙江绍兴中心"]);
dsy.add("0_6",["绍兴市"]);


dsy.add("0_7_0",["河南洛阳中心"]);
dsy.add("0_7_1",["河南濮阳中心"]);
dsy.add("0_7_2",["河南许昌中心"]);
dsy.add("0_7",["洛阳市","濮阳市","许昌市"]);

dsy.add("0_8_0",["武汉徐东中心"]);
dsy.add("0_8",["武汉市"]);

dsy.add("0_9_0",["湖南长沙中心"]);
dsy.add("0_9_1",["湖南衡阳中心","湖南衡阳祁东中心"]);
dsy.add("0_9",["长沙市","衡阳市"]);

dsy.add("0_10_0",["深圳宝安中心","深圳南山中心"]);
dsy.add("0_10_1",["爱乐广东梅州中心"]);
dsy.add("0_10",["深圳市","梅州市"]);

dsy.add("0_11_0",["成都凯德天府中心"]);
dsy.add("0_11",["成都市"]);

dsy.add("0_12_0",["昆明世纪城中心"]);
dsy.add("0_12",["昆明市"]);

dsy.add("0_13_0",["西安经开中心"]);
dsy.add("0_13",["西安市"]);


dsy.add("0",["北京市","天津市","重庆市","河北省","山西省","内蒙古","浙江省","河南省","湖北省","湖南省","广东省","四川省","云南省","陕西省"]);
var s=["s_province","s_city","s_county"];//三个select的name
var opt0 = ["省份","地级市","预约中心"];//初始值
function _init_area(){  //初始化函数
	for(i=0;i<s.length-1;i++){
	  document.getElementById(s[i]).onchange=new Function("change("+(i+1)+")");
	}
	change(0);
}




 

