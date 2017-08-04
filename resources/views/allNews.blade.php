@extends('foundationPage')
@section('content')
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <script type="text/javascript" src = "/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src = "/js/bootstrap.min.js"></script>
    <div>
    @foreach($news as $new )
        <a href="/news/{{$new->id }}"><h4>{{ $new->caption }}</h4></a>
    @endforeach
    </div>
    {!! $news->render() !!}

@endsection