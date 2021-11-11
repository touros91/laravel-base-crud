@extends('layout.base')

@section('pageContent')
<h1>Inserisci un nuovo prodotto</h1>

<form action="{{route("comics.store")}}" method="POST">
	@csrf

	<div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo" value="{{ old('title') }}">

		@error('title')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="description">Descrizione</label>
        <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Inserisci la descrizione">{{ old('description') }}</textarea>

		@error('description')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="thumb">Immagine</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Inserisci il link dell'immagine" value="{{ old('thumb') }}">

		@error('thumb')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
		<label for="price">Prezzo</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="Inserisci il prezzo" value="{{ old('price') }}">

		@error('price')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
        <label for="series">Titolo della serie</label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Inserisci il titolo della serie" value="{{ old('series') }}"
		
		@error('series')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<div class="form-group">
        <label for="sale_date">Data di uscita</label>
        <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="Inserisci la data di uscita" value="{{ old('sale_date') }}">
		
		@error('sale_date')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

    <div class="form-group">
        <label for="type">Tipo</label>
        <input type="text" class="form-control" name="type" id="type" placeholder="Inserisci il tipo" value="{{ old('type') }}">
    
		@error('type')
			<div class="alert alert-danger">{{ $message }}</div>
		@enderror
	</div>

	<button type="submit" class="btn btn-primary">Crea</button>
  </form>
    
@endsection