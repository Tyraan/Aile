<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ URL('center/'.$center->id) }}" method="POST">
        <input name="_method" type="hidden" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="text" name="name" class="form-control" required="required" value="{{ $center->name }}">
            <br>
      <textarea name="intro" rows="10" class="form-control" required="required">{{ $center->intro }}</textarea>
            <br>
       <input type="tel" name="mobile" required = "required" value="{{ $center->mobile }}" placeholder="">
     <input type ="text" name ="supervisor"  required = "required" value="{{ $center->supervisor }}">
    <button class="btn btn-lg btn-info" type ="submit">编辑 Page</button>
</form>
</body>
</html> 