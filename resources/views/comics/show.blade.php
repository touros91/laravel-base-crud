@extends('layout.base')

@section('pageContent')
<div class="show">
    <h1>{{$comic["title"]}}</h1>
    <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}">
    <h4>Description</h4>
    <p>{{$comic["description"]}}</p>
    <div>Price: Є {{$comic["price"]}}</div>
</div>

    
@endsection