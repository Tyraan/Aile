<table style="padding-left: 0px; list-style-position: outside;">
<thead>
	<tr>
	    <th>id</th><th>宝贝名称</th><th>性别</th><th>出生日期</th><th>手机号</th><th>城市</th><th>中心名称</th><th>预约日期</th>
	</tr>
</thead>
<tbody>

	@foreach($CourseAppointment as $course)
	<tr>
		<th>{{ $course->id }}</th><th>{{ $course->babyname }}</th><th>{{ $course->babysex }}</th>
		<th>{{ $course->rq }}</th>
		<th>{{ $course->mobile }}</th><th>{{ $course->city }}</th><th>{{ $course->address }}</th>
		<th>{{ date("Y-m-d H:i",$course->pubdate) }}</th>		
	</tr>
	@endforeach
</thead>
</table>
{!! $CourseAppointment->render() !!} 
	

