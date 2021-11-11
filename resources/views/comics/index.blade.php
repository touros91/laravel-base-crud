@extends('layout.base')

@section('pageContent')

<h4>Lista di tutti i prodotti</h4>
<table class="table mt-3">
	<thead>
	  <tr>
		<th scope="col">#</th>
		<th scope="col">Titolo</th>
		<th scope="col">Tipo</th>
		<th scope="col">Data uscita</th>
	  </tr>
	</thead>
	<tbody>
	  @foreach ($comics as $comic)
	  <tr>
		<th scope="row">{{$comic["id"]}}</th>
		<td>{{$comic["series"]}}</td>
        <td>{{$comic["type"]}}</td>
        <td>{{$comic["sale_date"]}}</td>
		<td>
		<a href="{{route("comics.show", $comic["id"])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
	  </tr>
	  @endforeach
	</tbody>
</table>
{{-- <main>
    <div class="comics">
        @foreach ($comics as $comic)
        <div class="single-comic">
            <a href="{{route("comics.show", $comic["id"])}}">
                <div class="image">
                    <img src="{{$comic["thumb"]}}" alt="">
                </div>
                <h4>{{strtoupper($comic["series"])}}</h4>
            </a>
        </div>
        @endforeach
    </div>
</main>  --}}

@endsection
    