@extends('layout.base')

@section('pageContent')

<h4>Lista di tutti i prodotti</h4>
<table class="table mt-3">
	<thead>
	  <tr>
		<th scope="col">#</th>
		<th scope="col">Titolo</th>
		<th scope="col">Tipo</th>
		<th scope="col">Data di uscita</th>
		<th scope="col">Prezzo</th>
		<th scope="col"></th>
	  </tr>
	</thead>
	<tbody>
	  @foreach ($comics as $comic)
	  <tr>
		<th scope="row">{{$comic["id"]}}</th>
		<td>{{$comic["series"]}}</td>
        <td>{{$comic["type"]}}</td>
        <td>{{$comic["sale_date"]}}</td>
        <td>{{$comic["price"]}}</td>
		<td>
			<a href="{{route("comics.show", $comic["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
		</td>
	</tr>
	  @endforeach
	</tbody>
</table>
	<a href="{{route("comics.create", $comic["id"])}}"><button type="button" class="btn btn-primary">Crea</button></a>


@endsection
    