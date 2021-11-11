@extends('layout.base')

@section('pageContent')
<h1>Inserisci un nuovo prodotto</h1>

<form action="{{route("comics.store")}}" method="POST">
	@csrf

	<div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Inserisci il titolo">

	</div>

	<div class="form-group">
		<label for="description">Descrizione</label>
        <textarea name="description" class="form-control" id="description" cols="30" rows="10"  placeholder="Inserisci la descrizione"></textarea>

	</div>

	<div class="form-group">
		<label for="thumb">Immagine</label>
        <input type="text" class="form-control" name="thumb" id="thumb"  placeholder="Inserisci il link dell'immagine">

	</div>

	<div class="form-group">
		<label for="price">Prezzo</label>
        <input type="text" class="form-control" name="price" id="price"  placeholder="Inserisci il prezzo">

	</div>

	<div class="form-group">
		
        <label for="series">Titolo della serie</label>
        <input type="text" class="form-control" name="series" id="series"  placeholder="Inserisci il titolo della serie">
	</div>

	<div class="form-group">
		
     
        <label for="sale_date">Data di uscita</label>
        <input type="text" class="form-control" name="sale_date" id="asle_date"  placeholder="Inserisci la data di uscita">
	</div>

    <div class="form-group">
		
     
        <label for="type">Tipo</label>
        <input type="text" class="form-control" name="type" id="type"  placeholder="Inserisci il tipo">
    
	</div>

	<button type="submit" class="btn btn-primary">Crea</button>
  </form>
{{-- <form action="{{ route('comics.store')}}" method="POST">
    @csrf
    <label for="title">Titolo</label>
    <input type="text" name="title" id="title" placeholder="Inserisci il titolo">

    <label for="description">Descrizione</label>
    <textarea name="description" id="description" cols="30" rows="10"  placeholder="Inserisci la descrizione"></textarea>

    <label for="thumb">Immagine</label>
    <input type="text" name="thumb" id="thumb"  placeholder="Inserisci il link dell'immagine">

    <label for="price">Prezzo</label>
    <input type="text" name="price" id="price"  placeholder="Inserisci il prezzo">

    <label for="series">Titolo della serie</label>
    <input type="text" name="series" id="series"  placeholder="Inserisci il titolo della serie">

    <label for="sale_date">Data di uscita</label>
    <input type="text" name="ale_date" id="ale_date"  placeholder="Inserisci la data di uscita">

    <label for="type">Tipo</label>
    <input type="text" name="type" id="type"  placeholder="Inserisci il tipo">

</form> --}}
    
@endsection