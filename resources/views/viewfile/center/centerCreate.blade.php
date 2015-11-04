<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>	

<form action="{{ URL('center') }}" method="POST" accept-charset="utf-8">
<table>
	<thead>
		<tr>
			<th><p>中心名称</p><input type = 'text' name="name" ></th>
			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><p>简介</p></td><td><input type="text" name="intro" value="" placeholder=""></td>
		</tr>
		<tr><td><p>负责人</p></td><td><input type="text" name="supervisor" value="" placeholder=""></td></tr>
		<tr><td><label>该中心的新闻</label></td></tr>

		@foreach($news as $new)
			<tr>
				<td>
					<label><input type="checkbox" name="news" value="{{ $new ->id }}"> {{ $new->caption }} </label>
				</td>
			</tr>
		@endforeach
		<tr><td><button type="submit">建立新中心</button></td></tr>
	</tbody>
</table>

</form>
</body>
</html>