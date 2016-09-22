<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<form action="{{ URL('center/'.$center->id ) }}" method="POST" enctype="multipart/form-data" >
    <input name="_method" type="hidden" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="name" class="form-control" required="required" value="{{ $center->name }}"><br>
    <textarea name="intro" rows="10" class="form-control" required="required">{{ $center->intro }}</textarea><br>
    <input type="tel" name="mobile"  value="{{ $center->mobile }}" placeholder="">
    <input type ="text" name ="supervisor"  required = "required" value="{{ $center->supervisor }}"><br>
    <input type="file" name="banner" value="" placeholder=""> 

    @foreach ($news as $new)
    @if ($new->center->contains($center->id))
      <input type="checkbox" name="news[]" checked="" value="{{$new->id}}">{{ $new->caption }}
    @else 
      <input type="checkbox" name="news[]"  value="{{$new->id}}">{{ $new->caption}} 
    @endif  
    @endforeach

    <button class="btn btn-lg btn-info" type ="submit">编辑 Page</button>


</form>
</body>
</html> 