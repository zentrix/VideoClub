@extends('layouts.app')

@section('content')
	
	<h1 class="text-center">Listado de peliculas</h1>
	
	<div class="row">
		@foreach($movies as $movie)
			<div class="col-xs-6 col-sm-4 col-md-3 text-center">
				<a href="{{ url('/catalog/show/' . $movie->id)}}">
					<img src="{{ $movie->poster }}" style="height: 200px">
					<h4 style="min-height: 45px; margin: 5px 0 10px 0; ">
						{{ $movie->title }}
					</h4>
				</a>
			</div>
		@endforeach
	</div>
@stop
