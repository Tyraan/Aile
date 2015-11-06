@include('_layouts.saparateParts.head')
<body>

<a href="{{ URL('center/create') }}" >新增</a>

          @foreach ($centers as $center)
            <hr>
            <div class="page">
              <h4>{{ $center->name }}</h4>
              <div class="content">
                <p> {{ $center->intro }}    </p>                
                <p> {{$center->supervisor}} </p>
                <p>
                	@foreach ($center->news as $new)
                	<h5>{{$new->caption}}</h5>                
                	@endforeach
                </p>
              </div>
            </div>
            <a href="{{ URL('center/'.$center->id.'/edit') }}" class="btn btn-success">编辑</a>
            <form action="{{ URL('center/'.$center->id) }}" method="POST" style="display: inline;">
              <input name="_method" type="hidden" value="DELETE">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <button type="submit" class="btn btn-danger">删除</button>
            </form>
 		@endforeach

</body>
</html>