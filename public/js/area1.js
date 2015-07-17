﻿/*
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

dsy.add("0",["北京市","天津市","上海市","重庆市","河北省","山西省","内蒙古","辽宁省","吉林省","黑龙江省","江苏省","浙江省","安徽省","福建省","江西省","山东省","河南省","湖北省","湖南省","广东省","广西","海南省","四川省","贵州省","云南省","西藏","陕西省","甘肃省","青海省","宁夏","新疆","香港","澳门","台湾省"]);
dsy.add("0_0_0",["北京富力中心","北京朝阳大悦城中心","北京大峡谷中心","北京方庄新业中心","北京健翔中心","北京通州中心","北京西直门中心","北京广安门中心","北京亚奥中心","北京学院路中心","北京常营中心","北京回龙观中心"]);
dsy.add("0_0",["北京市"]);
dsy.add("0_1_0",["天津远洋中心"]);
dsy.add("0_1",["天津市"]);

dsy.add("0_3_0",["重庆龙湖中心"]);
dsy.add("0_3",["重庆市"]);
dsy.add("0_4_0",["河北石家庄中心"]);
dsy.add("0_4",["石家庄市"]);

dsy.add("0_5_8",["爱乐国际早教临汾中心"]);

dsy.add("0_5",["临汾市"]);
dsy.add("0_6_0",["暂无中心"]);
dsy.add("0_6_1",["暂无中心"]);
dsy.add("0_6_2",["暂无中心"]);
dsy.add("0_6_3",["内蒙古赤峰中心"]);
dsy.add("0_6_4",["暂无中心"]);
dsy.add("0_6_5",["暂无中心"]);
dsy.add("0_6_6",["暂无中心"]);
dsy.add("0_6_7",["暂无中心"]);
dsy.add("0_6_8",["暂无中心"]);
dsy.add("0_6_9",["暂无中心"]);
dsy.add("0_6_10",["暂无中心"]);
dsy.add("0_6_11",["暂无中心"]);
dsy.add("0_6",["呼和浩特市","包头市","乌海市","赤峰市","通辽市","呼伦贝尔市","鄂尔多斯市","乌兰察布市","巴彦淖尔市","兴安盟","锡林郭勒盟","阿拉善盟"]);
dsy.add("0_7_0",["暂无中心"]);
dsy.add("0_7_1",["暂无中心"]);
dsy.add("0_7_2",["暂无中心"]);
dsy.add("0_7_3",["暂无中心"]);
dsy.add("0_7_4",["暂无中心"]);
dsy.add("0_7_5",["暂无中心"]);
dsy.add("0_7_6",["暂无中心"]);
dsy.add("0_7_7",["暂无中心"]);
dsy.add("0_7_8",["暂无中心"]);
dsy.add("0_7_9",["暂无中心"]);
dsy.add("0_7_10",["暂无中心"]);
dsy.add("0_7_11",["暂无中心"]);
dsy.add("0_7_12",["暂无中心"]);
dsy.add("0_7_13",["暂无中心"]);
dsy.add("0_7",["沈阳市","朝阳市","阜新市","铁岭市","抚顺市","本溪市","辽阳市","鞍山市","丹东市","大连市","营口市","盘锦市","锦州市","葫芦岛市"]);
dsy.add("0_8_0",["暂无中心"]);
dsy.add("0_8_1",["暂无中心"]);
dsy.add("0_8_2",["暂无中心"]);
dsy.add("0_8_3",["暂无中心"]);
dsy.add("0_8_4",["暂无中心"]);
dsy.add("0_8_5",["暂无中心"]);
dsy.add("0_8_6",["暂无中心"]);
dsy.add("0_8_7",["暂无中心"]);
dsy.add("0_8_8",["暂无中心"]);
dsy.add("0_8",["长春市","白城市","松原市","吉林市","四平市","辽源市","通化市","白山市","延边州"]);
dsy.add("0_9_0",["暂无中心"]);
dsy.add("0_9_1",["暂无中心"]);
dsy.add("0_9_2",["暂无中心"]);
dsy.add("0_9_3",["暂无中心"]);
dsy.add("0_9_4",["暂无中心"]);
dsy.add("0_9_5",["暂无中心"]);
dsy.add("0_9_6",["暂无中心"]);
dsy.add("0_9_7",["暂无中心"]);
dsy.add("0_9_8",["暂无中心"]);
dsy.add("0_9_9",["暂无中心"]);
dsy.add("0_9_10",["暂无中心"]);
dsy.add("0_9_11",["暂无中心"]);
dsy.add("0_9_12",["暂无中心"]);
dsy.add("0_9",["哈尔滨市","齐齐哈尔市","七台河市","黑河市","大庆市","鹤岗市","伊春市","佳木斯市","双鸭山市","鸡西市","牡丹江市","绥化市","大兴安岭地区"]);
dsy.add("0_10_0",["暂无中心"]);
dsy.add("0_10_1",["暂无中心"]);
dsy.add("0_10_2",["暂无中心"]);
dsy.add("0_10_3",["暂无中心"]);
dsy.add("0_10_4",["暂无中心"]);
dsy.add("0_10_5",["暂无中心"]);
dsy.add("0_10_6",["暂无中心"]);
dsy.add("0_10_7",["暂无中心"]);
dsy.add("0_10_8",["暂无中心"]);
dsy.add("0_10_9",["暂无中心"]);
dsy.add("0_10_10",["暂无中心"]);
dsy.add("0_10_11",["暂无中心"]);
dsy.add("0_10_12",["暂无中心"]);
dsy.add("0_10",["南京市","徐州市","连云港市","宿迁市","淮安市","盐城市","扬州市","泰州市","南通市","镇江市","常州市","无锡市","苏州市"]);
dsy.add("0_11_0",["暂无中心"]);
dsy.add("0_11_1",["暂无中心"]);
dsy.add("0_11_2",["暂无中心"]);
dsy.add("0_11_3",["暂无中心"]);
dsy.add("0_11_4",["暂无中心"]);
dsy.add("0_11_5",["浙江绍兴中心"]);
dsy.add("0_11_6",["暂无中心"]);
dsy.add("0_11_7",["暂无中心"]);
dsy.add("0_11_8",["暂无中心"]);
dsy.add("0_11_9",["暂无中心"]);
dsy.add("0_11_10",["暂无中心"]);
dsy.add("0_11",["杭州市","湖州市","嘉兴市","舟山市","宁波市","绍兴市","衢州市","金华市","台州市","温州市","丽水市"]);
dsy.add("0_12_0",["暂无中心"]);
dsy.add("0_12_1",["暂无中心"]);
dsy.add("0_12_2",["暂无中心"]);
dsy.add("0_12_3",["暂无中心"]);
dsy.add("0_12_4",["暂无中心"]);
dsy.add("0_12_5",["暂无中心"]);
dsy.add("0_12_6",["暂无中心"]);
dsy.add("0_12_7",["暂无中心"]);
dsy.add("0_12_8",["暂无中心"]);
dsy.add("0_12_9",["暂无中心"]);
dsy.add("0_12_10",["暂无中心"]);
dsy.add("0_12_11",["暂无中心"]);
dsy.add("0_12_12",["暂无中心"]);
dsy.add("0_12_13",["暂无中心"]);
dsy.add("0_12_14",["暂无中心"]);
dsy.add("0_12_15",["暂无中心"]);
dsy.add("0_12_16",["暂无中心"]);
dsy.add("0_12",["合肥市","宿州市","淮北市","亳州市","阜阳市","蚌埠市","淮南市","滁州市","马鞍山市","芜湖市","铜陵市","安庆市","黄山市","六安市","巢湖市","池州市","宣城市"]);
dsy.add("0_13_0",["暂无中心"]);
dsy.add("0_13_1",["暂无中心"]);
dsy.add("0_13_2",["暂无中心"]);
dsy.add("0_13_3",["暂无中心"]);
dsy.add("0_13_4",["暂无中心"]);
dsy.add("0_13_5",["暂无中心"]);
dsy.add("0_13_6",["暂无中心"]);
dsy.add("0_13_7",["暂无中心"]);
dsy.add("0_13_8",["暂无中心"]);
dsy.add("0_13",["福州市","南平市","莆田市","三明市","泉州市","厦门市","漳州市","龙岩市","宁德市"]);
dsy.add("0_14_0",["暂无中心"]);
dsy.add("0_14_1",["暂无中心"]);
dsy.add("0_14_2",["暂无中心"]);
dsy.add("0_14_3",["暂无中心"]);
dsy.add("0_14_4",["暂无中心"]);
dsy.add("0_14_5",["暂无中心"]);
dsy.add("0_14_6",["暂无中心"]);
dsy.add("0_14_7",["暂无中心"]);
dsy.add("0_14_8",["暂无中心"]);
dsy.add("0_14_9",["暂无中心"]);
dsy.add("0_14_10",["暂无中心"]);
dsy.add("0_14",["南昌市","九江市","景德镇市","鹰潭市","新余市","萍乡市","赣州市","上饶市","抚州市","宜春市","吉安市"]);
dsy.add("0_15_0",["暂无中心"]);
dsy.add("0_15_1",["暂无中心"]);
dsy.add("0_15_2",["暂无中心"]);
dsy.add("0_15_3",["暂无中心"]);
dsy.add("0_15_4",["暂无中心"]);
dsy.add("0_15_5",["暂无中心"]);
dsy.add("0_15_6",["暂无中心"]);
dsy.add("0_15_7",["暂无中心"]);
dsy.add("0_15_8",["暂无中心"]);
dsy.add("0_15_9",["暂无中心"]);
dsy.add("0_15_10",["暂无中心"]);
dsy.add("0_15_11",["暂无中心"]);
dsy.add("0_15_12",["暂无中心"]);
dsy.add("0_15_13",["暂无中心"]);
dsy.add("0_15_14",["暂无中心"]);
dsy.add("0_15_15",["暂无中心"]);
dsy.add("0_15_16",["暂无中心"]);
dsy.add("0_15",["济南市","青岛市","聊城市","德州市","东营市","淄博市","潍坊市","烟台市","威海市","日照市","临沂市","枣庄市","济宁市","泰安市","莱芜市","滨州市","菏泽市"]);
dsy.add("0_16_0",["暂无中心"]);
dsy.add("0_16_1",["暂无中心"]);
dsy.add("0_16_2",["暂无中心"]);
dsy.add("0_16_3",["河南洛阳中心"]);
dsy.add("0_16_4",["暂无中心"]);
dsy.add("0_16_5",["暂无中心"]);
dsy.add("0_16_6",["暂无中心"]);
dsy.add("0_16_7",["暂无中心"]);
dsy.add("0_16_8",["河南濮阳中心"]);
dsy.add("0_16_9",["暂无中心"]);
dsy.add("0_16_10",["河南许昌中心"]);
dsy.add("0_16_11",["暂无中心"]);
dsy.add("0_16_12",["暂无中心"]);
dsy.add("0_16_13",["暂无中心"]);
dsy.add("0_16_14",["暂无中心"]);
dsy.add("0_16_15",["暂无中心"]);
dsy.add("0_16_16",["暂无中心"]);
dsy.add("0_16",["郑州市","开封市","三门峡市","洛阳市","焦作市","新乡市","鹤壁市","安阳市","濮阳市","商丘市","许昌市","漯河市","平顶山市","南阳市","信阳市","周口市","驻马店市","济源市"]);
dsy.add("0_17_0",["暂无中心"]);
dsy.add("0_17_1",["暂无中心"]);
dsy.add("0_17_2",["暂无中心"]);
dsy.add("0_17_3",["暂无中心"]);
dsy.add("0_17_4",["暂无中心"]);
dsy.add("0_17_5",["暂无中心"]);
dsy.add("0_17_6",["暂无中心"]);
dsy.add("0_17_7",["暂无中心"]);
dsy.add("0_17_8",["暂无中心"]);
dsy.add("0_17_9",["暂无中心"]);
dsy.add("0_17_10",["暂无中心"]);
dsy.add("0_17_11",["暂无中心"]);
dsy.add("0_17_12",["暂无中心"]);
dsy.add("0_17_13",["暂无中心"]);
dsy.add("0_17",["武汉市","十堰市","襄樊市","荆门市","孝感市","黄冈市","鄂州市","黄石市","咸宁市","荆州市","宜昌市","随州市","省直辖县级行政单位","恩施州"]);
dsy.add("0_18_0",["湖南长沙中心"]);
dsy.add("0_18_7",["湖南衡阳中心"]);
dsy.add("0_18_8",["暂无中心"]);
dsy.add("0_18_9",["暂无中心"]);
dsy.add("0_18_10",["暂无中心"]);
dsy.add("0_18_11",["暂无中心"]);
dsy.add("0_18_12",["暂无中心"]);
dsy.add("0_18_13",["暂无中心"]);
dsy.add("0_18",["长沙市","张家界市","常德市","益阳市","岳阳市","株洲市","湘潭市","衡阳市","郴州市","永州市","邵阳市","怀化市","娄底市","湘西州"]);
dsy.add("0_19_0",["暂无中心"]);
dsy.add("0_19_1",["深圳宝安中心","深圳南山中心"]);
dsy.add("0_19_2",["暂无中心"]);
dsy.add("0_19_3",["暂无中心"]);
dsy.add("0_19_4",["暂无中心"]);
dsy.add("0_19_5",["爱乐广东梅州中心"]);
dsy.add("0_19_6",["暂无中心"]);
dsy.add("0_19_7",["暂无中心"]);
dsy.add("0_19_8",["暂无中心"]);
dsy.add("0_19_9",["暂无中心"]);
dsy.add("0_19_10",["暂无中心"]);
dsy.add("0_19_12",["暂无中心"]);
dsy.add("0_19_14",["暂无中心"]);
dsy.add("0_19_15",["暂无中心"]);
dsy.add("0_19_16",["暂无中心"]);
dsy.add("0_19_17",["暂无中心"]);
dsy.add("0_19_18",["暂无中心"]);
dsy.add("0_19_19",["暂无中心"]);
dsy.add("0_19_20",["暂无中心"]);
dsy.add("0_19",["广州市","深圳市","清远市","韶关市","河源市","梅州市","潮州市","汕头市","揭阳市","汕尾市","惠州市","东莞市","珠海市","中山市","江门市","佛山市","肇庆市","云浮市","阳江市","茂名市","湛江市"]);
dsy.add("0_20_0",["暂无中心"]);
dsy.add("0_20_1",["暂无中心"]);
dsy.add("0_20_2",["暂无中心"]);
dsy.add("0_20_3",["暂无中心"]);
dsy.add("0_20_4",["暂无中心"]);
dsy.add("0_20_5",["暂无中心"]);
dsy.add("0_20_6",["暂无中心"]);
dsy.add("0_20_7",["暂无中心"]);
dsy.add("0_20_8",["暂无中心"]);
dsy.add("0_20_9",["暂无中心"]);
dsy.add("0_20_10",["暂无中心"]);
dsy.add("0_20_11",["暂无中心"]);
dsy.add("0_20_12",["暂无中心"]);
dsy.add("0_20_13",["暂无中心"]);
dsy.add("0_20",["南宁市","桂林市","柳州市","梧州市","贵港市","玉林市","钦州市","北海市","防城港市","崇左市","百色市","河池市","来宾市","贺州市"]);
dsy.add("0_21_0",["暂无中心"]);
dsy.add("0_21_2",["暂无中心"]);
dsy.add("0_21",["海口市","三亚市","省直辖行政单位"]);
dsy.add("0_22_0",["成都高新中心"]);
dsy.add("0_22_1",["暂无中心"]);
dsy.add("0_22_2",["暂无中心"]);
dsy.add("0_22_3",["暂无中心"]);
dsy.add("0_22_4",["暂无中心"]);
dsy.add("0_22_5",["暂无中心"]);
dsy.add("0_22_6",["暂无中心"]);
dsy.add("0_22_7",["暂无中心"]);
dsy.add("0_22_8",["暂无中心"]);
dsy.add("0_22_9",["暂无中心"]);
dsy.add("0_22_10",["暂无中心"]);
dsy.add("0_22_11",["暂无中心"]);
dsy.add("0_22_12",["暂无中心"]);
dsy.add("0_22_13",["暂无中心"]);
dsy.add("0_22_14",["暂无中心"]);
dsy.add("0_22_15",["暂无中心"]);
dsy.add("0_22_16",["暂无中心"]);
dsy.add("0_22_17",["暂无中心"]);
dsy.add("0_22_18",["暂无中心"]);
dsy.add("0_22_19",["暂无中心"]);
dsy.add("0_22_20",["暂无中心"]);
dsy.add("0_22",["成都市","广元市","绵阳市","德阳市","南充市","广安市","遂宁市","内江市","乐山市","自贡市","泸州市","宜宾市","攀枝花市","巴中市","达州市","资阳市","眉山市","雅安市","阿坝州","甘孜州","凉山州"]);
dsy.add("0_23_0",["暂无中心"]);
dsy.add("0_23_1",["暂无中心"]);
dsy.add("0_23_2",["暂无中心"]);
dsy.add("0_23_3",["暂无中心"]);
dsy.add("0_23_4",["暂无中心"]);
dsy.add("0_23_5",["暂无中心"]);
dsy.add("0_23_6",["暂无中心"]);
dsy.add("0_23_7",["暂无中心"]);
dsy.add("0_23_8",["暂无中心"]);
dsy.add("0_23",["贵阳市","六盘水市","遵义市","安顺市","毕节地区","铜仁地区","黔东南州","黔南州","黔西南州"]);
dsy.add("0_24_0",["昆明世纪城中心"]);
dsy.add("0_24_1",["暂无中心"]);
dsy.add("0_24_2",["暂无中心"]);
dsy.add("0_24_3",["暂无中心"]);
dsy.add("0_24_4",["暂无中心"]);
dsy.add("0_24_5",["暂无中心"]);
dsy.add("0_24_6",["暂无中心"]);
dsy.add("0_24_7",["暂无中心"]);
dsy.add("0_24_8",["暂无中心"]);
dsy.add("0_24_9",["暂无中心"]);
dsy.add("0_24_10",["暂无中心"]);
dsy.add("0_24_11",["暂无中心"]);
dsy.add("0_24_12",["暂无中心"]);
dsy.add("0_24_13",["暂无中心"]);
dsy.add("0_24_14",["暂无中心"]);
dsy.add("0_24_15",["暂无中心"]);
dsy.add("0_24",["昆明市","曲靖市","玉溪市","保山市","昭通市","丽江市","思茅市","临沧市","德宏州","怒江州","迪庆州","大理州","楚雄州","红河州","文山州","西双版纳州"]);
dsy.add("0_25_0",["暂无中心"]);
dsy.add("0_25_1",["暂无中心"]);
dsy.add("0_25_2",["暂无中心"]);
dsy.add("0_25_3",["暂无中心"]);
dsy.add("0_25_4",["暂无中心"]);
dsy.add("0_25_5",["暂无中心"]);
dsy.add("0_25_6",["暂无中心"]);
dsy.add("0_25",["拉萨市","那曲地区","昌都地区","林芝地区","山南地区","日喀则地区","阿里地区"]);
dsy.add("0_26_0",["西安经开中心"]);
dsy.add("0_26_1",["暂无中心"]);
dsy.add("0_26_2",["暂无中心"]);
dsy.add("0_26_3",["暂无中心"]);
dsy.add("0_26_4",["暂无中心"]);
dsy.add("0_26_5",["暂无中心"]);
dsy.add("0_26_6",["暂无中心"]);
dsy.add("0_26_7",["暂无中心"]);
dsy.add("0_26_8",["暂无中心"]);
dsy.add("0_26_9",["暂无中心"]);
dsy.add("0_26",["西安市","延安市","铜川市","渭南市","咸阳市","宝鸡市","汉中市","榆林市","安康市","商洛市"]);
dsy.add("0_27_0",["暂无中心"]);
dsy.add("0_27_1",["暂无中心"]);
dsy.add("0_27_2",["暂无中心"]);
dsy.add("0_27_3",["暂无中心镇"]);
dsy.add("0_27_4",["暂无中心"]);
dsy.add("0_27_5",["暂无中心"]);
dsy.add("0_27_6",["暂无中心"]);
dsy.add("0_27_7",["暂无中心"]);
dsy.add("0_27_8",["暂无中心"]);
dsy.add("0_27_9",["暂无中心"]);
dsy.add("0_27_10",["暂无中心"]);
dsy.add("0_27_11",["暂无中心"]);
dsy.add("0_27_12",["暂无中心"]);
dsy.add("0_27",["兰州市","嘉峪关市","白银市","天水市","武威市","酒泉市","张掖市","庆阳市","平凉市","定西市","陇南市","临夏州","甘南州"]);
dsy.add("0_28_0",["暂无中心"]);
dsy.add("0_28_1",["暂无中心"]);
dsy.add("0_28_2",["暂无中心"]);
dsy.add("0_28_3",["暂无中心"]);
dsy.add("0_28_4",["暂无中心"]);
dsy.add("0_28_5",["暂无中心"]);
dsy.add("0_28_6",["暂无中心"]);
dsy.add("0_28_7",["暂无中心"]);
dsy.add("0_28",["西宁市","海东地区","海北州","海南州","黄南州","果洛州","玉树州","海西州"]);
dsy.add("0_29_0",["暂无中心"]);
dsy.add("0_29_1",["暂无中心"]);
dsy.add("0_29_2",["暂无中心"]);
dsy.add("0_29_3",["暂无中心"]);
dsy.add("0_29_4",["暂无中心"]);
dsy.add("0_29",["银川市","石嘴山市","吴忠市","固原市","中卫市"]);
dsy.add("0_30_0",["暂无中心"]);
dsy.add("0_30_1",["暂无中心"]);
dsy.add("0_30_2",["暂无中心"]);
dsy.add("0_30_3",["暂无中心"]);
dsy.add("0_30_4",["暂无中心"]);
dsy.add("0_30_5",["暂无中心"]);
dsy.add("0_30_6",["暂无中心"]);
dsy.add("0_30_7",["暂无中心"]);
dsy.add("0_30_8",["暂无中心"]);
dsy.add("0_30_9",["暂无中心"]);
dsy.add("0_30_10",["暂无中心"]);
dsy.add("0_30_11",["暂无中心"]);
dsy.add("0_30_12",["暂无中心"]);
dsy.add("0_30_13",["暂无中心"]);
dsy.add("0_30_14",["暂无中心"]);
dsy.add("0_30",["暂无中心"]);
dsy.add("0_31_0",["暂无中心"]);
dsy.add("0_31",["香港特别行政区"]);
dsy.add("0_32_0",["暂无中心"]);
dsy.add("0_32",["澳门特别行政区"]);
dsy.add("0_33_0",["暂无中心"]);
dsy.add("0_33",["暂无中心"]);
dsy.add("0",["北京市","天津市","上海市","重庆市","河北省","山西省","内蒙古","辽宁省","吉林省","黑龙江省","江苏省","浙江省","安徽省","福建省","江西省","山东省","河南省","湖北省","湖南省","广东省","广西","海南省","四川省","贵州省","云南省","西藏","陕西省","甘肃省","青海省","宁夏","新疆","香港","澳门","台湾省"]);

var s=["s_province","s_city","s_county"];//三个select的name
var opt0 = ["省份","地级市","预约中心"];//初始值
function _init_area(){  //初始化函数
	for(i=0;i<s.length-1;i++){
	  document.getElementById(s[i]).onchange=new Function("change("+(i+1)+")");
	}
	change(0);
}




 

