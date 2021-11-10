@extends('layout.base')

@section('pageContent')

<h1>{{$comic["series"]}}</h1>
<img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
<p>{{$comic["description"]}}</p>
<div>Є {{$comic["price"]}}</div>
    
@endsection