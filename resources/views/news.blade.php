@extends('foundationPage')
@section('title', '爱乐新闻页')

@section('content')
    <div class="newstitle">
        <h2>{!! $news->caption !!}</h2>
    </div>
    <div>
        {!! $news->content !!}
    </div>
@endsection