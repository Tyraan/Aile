<ul >	

	<li>{{ date('y-m-d h:i:s',time()) }}</li>	
	@if (Auth::check())
	<li>welcom {{ Auth::user()->name }}</li>
	<li><a href="{{ URL('auth/logout')}}">登出</a></li>
	@else		
	<li><a href= "{{ URL('auth/login') }}" ></a></li>
	@endif
</ul>


