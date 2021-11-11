@extends('layout.base')

@section('pageContent')
<h1>Modifica prodotto: {{$comic["title"]}}</h1>

<form action="{{route("comics.update", $comic["id"])}}" method="POST">
	@csrf
    @method("PUT")

	<div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo" value="{{$comic->title}}">

	</div>

	<div class="form-group">
		<label for="description">Descrizione</label>
        <textarea name="description" class="form-control" id="description" cols="30" rows="10"  placeholder="Inserisci la descrizione">{{$comic->description}}</textarea>

	</div>

	<div class="form-group">
		<label for="thumb">Immagine</label>
        <input type="text" class="form-control" name="thumb" id="thumb"  placeholder="Inserisci il link dell'immagine" value="{{$comic->thumb}}">

	</div>

	<div class="form-group">
		<label for="price">Prezzo</label>
        <input type="text" class="form-control" name="price" id="price"  placeholder="Inserisci il prezzo" value="{{$comic->price}}">

	</div>

	<div class="form-group">
		
        <label for="series">Titolo della serie</label>
        <input type="text" class="form-control" name="series" id="series"  placeholder="Inserisci il titolo della serie" value="{{$comic->series}}">
	</div>

	<div class="form-group">
		
     
        <label for="sale_date">Data di uscita</label>
        <input type="text" class="form-control" name="sale_date" id="asle_date"  placeholder="Inserisci la data di uscita" value="{{$comic->sale_date}}">
	</div>

    <div class="form-group">
		
     
        <label for="type">Tipo</label>
        <input type="text" class="form-control" name="type" id="type"  placeholder="Inserisci il tipo" value="{{$comic->type}}">
    
	</div>

	<button type="submit" class="btn btn-primary">Crea</button>
  </form>
    
@endsection