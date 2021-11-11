@extends('layout.base')

@section('pageContent')
<h1>Modifica prodotto: {{$comic["title"]}}</h1>

<form action="{{route("comics.update", $comic["id"])}}" method="POST">
	@csrf
    @method("PUT")

	<div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo" value="{{old('title') ? old('title') : $comic['title']}}">

		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="description">Descrizione</label>
        <textarea name="description" class="form-control" id="description" cols="30" rows="10"  placeholder="Inserisci la descrizione">{{old('description') ? old('description') : $comic['description']}}</textarea>

		@error('description')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="thumb">Immagine</label>
        <input type="text" class="form-control" name="thumb" id="thumb"  placeholder="Inserisci il link dell'immagine" value="{{old('thumb') ? old('thumb') : $comic['thumb']}}">

		@error('thumb')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="price">Prezzo</label>
        <input type="text" class="form-control" name="price" id="price"  placeholder="Inserisci il prezzo" value="{{old('price') ? old('price') : $comic['price']}}">

		@error('price')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">	
        <label for="series">Titolo della serie</label>
        <input type="text" class="form-control" name="series" id="series"  placeholder="Inserisci il titolo della serie" value="{{old('series') ? old('series') : $comic['series']}}">
	
		@error('series')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
        <label for="sale_date">Data di uscita</label>
        <input type="text" class="form-control" name="sale_date" id="sale_date"  placeholder="Inserisci la data di uscita" value="{{old('sale_date') ? old('sale_date') : $comic['sale_date']}}">
	
		@error('sale_date')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

    <div class="form-group">
        <label for="type">Tipo</label>
        <input type="text" class="form-control" name="type" id="type"  placeholder="Inserisci il tipo" value="{{old('type') ? old('type') : $comic['type']}}">
    
		@error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<button type="submit" class="btn btn-primary">Modifica</button>
  </form>
    
@endsection