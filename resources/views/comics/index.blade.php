@extends('layout.base')

@section('pageContent')

<h4>All Comics</h4>
<table class="table mt-3">
	<thead>
	  <tr>
		<th scope="col">#</th>
		<th scope="col">Title</th>
		<th scope="col">Type</th>
		<th scope="col">Sale Date</th>
		<th scope="col">Price</th>
		<th scope="col"></th>
		<th scope="col"></th>
		<th scope="col"></th>
	  </tr>
	</thead>
	<tbody>
	  @foreach ($comics as $comic)
	  <tr>
		<th scope="row">{{$comic["id"]}}</th>
		<td>{{$comic["title"]}}</td>
        <td>{{$comic["type"]}}</td>
        <td>{{$comic["sale_date"]}}</td>
        <td>Є {{$comic["price"]}}</td>
		<td>
			<a href="{{route("comics.show", $comic["id"])}}"><button type="button" class="btn btn-primary">View</button></a>
		</td>
		<td>
			<a href="{{route("comics.edit", $comic["id"])}}"><button type="button" class="btn btn-warning">Edit</button></a>
		</td>
		<td>
			<form action="{{route('comics.destroy', $comic->id)}}" method="POST">
				@csrf
				@method('DELETE')
				<input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete it?')">
			</form>
		</td>
	</tr>
	  @endforeach
	</tbody>
</table>
@endsection
    