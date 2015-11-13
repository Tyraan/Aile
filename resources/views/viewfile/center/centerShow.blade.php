<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<table>
	<caption>{{ $center->name }}</caption>
	<thead>
		<tr>
			<th>{{ $center->id }}</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{ $center->intro }}</td>
		</tr>
		<tr><td>{{ $center->supervisor }}</td></tr>
		@foreach ($center->news as $new )

		<tr><td>{{$new->id}}</td><td>{{ $new->caption}}</td></tr>			
		@endforeach	
	</tbody>
</table>
</body>
</html>