<form action="{{ URL('courseap')}}" method="POST" accept-charset="utf-8">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<table>
	<caption>免费预约</caption>
	<tbody>
		<tr>
			<td>宝宝姓名</td><td><input type ="text" name = 'babyname'></td>
		</tr>
		<tr>
			<td>宝宝年龄</td><td><input type="date" name="babymonth" value="" placeholder=""></td>
		</tr>

		<tr>
			<td>宝宝性别</td><td><input type="radio" name="babysex" value="男">男</td><td><input type="radio" name="babysex" value="女" >女</td>
		</tr>
		<tr>
		 	<td>手机号</td><td><input type="tel" name="mobile" ></td>
		</tr>
		<tr>
			<td>所在城市</td><td><input type="text" name="city" ></td>
		</tr>
		<tr>
			<td>中心地址</td><td><input type="text" name="address" ></td>
		</tr>
		<tr>
			<td>预约时间</td><td><input type="date" name="pubdate" ></td>
		</tr>
		<tr>
			<td>提交</td><td><input type="submit" ></td>
		</tr>
	</tbody>
</table>
</form>
