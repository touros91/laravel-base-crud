@extends('layout.base')

@section('pageContent')
<h1>Edit Comic: {{$comic["title"]}}</h1>

<form action="{{route("comics.update", $comic["id"])}}" method="POST">
	@csrf
    @method("PUT")

	<div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Insert title" value="{{old('title') ? old('title') : $comic['title']}}">

		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="description">Description</label>
        <textarea name="description" class="form-control" id="description" cols="30" rows="10"  placeholder="Insert description">{{old('description') ? old('description') : $comic['description']}}</textarea>

		@error('description')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="thumb">Image</label>
        <input type="text" class="form-control" name="thumb" id="thumb"  placeholder="Insert URL image" value="{{old('thumb') ? old('thumb') : $comic['thumb']}}">

		@error('thumb')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="price">Price</label>
        <input type="text" class="form-control" name="price" id="price"  placeholder="Insert price" value="{{old('price') ? old('price') : $comic['price']}}">

		@error('price')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">	
        <label for="series">Serie Title</label>
        <input type="text" class="form-control" name="series" id="series"  placeholder="Insert serie" value="{{old('series') ? old('series') : $comic['series']}}">
	
		@error('series')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
        <label for="sale_date">Sale Date</label>
        <input type="text" class="form-control" name="sale_date" id="sale_date"  placeholder="Insert sale date" value="{{old('sale_date') ? old('sale_date') : $comic['sale_date']}}">
	
		@error('sale_date')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

    <div class="form-group">
        <label for="type">Type</label>
        <input type="text" class="form-control" name="type" id="type"  placeholder="Insert tyoe" value="{{old('type') ? old('type') : $comic['type']}}">
    
		@error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<button type="submit" class="btn btn-primary">Modifica</button>
  </form>
    
@endsection