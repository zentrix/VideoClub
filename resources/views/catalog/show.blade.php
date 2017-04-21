@extends('layouts.master')

@section('content')
	
	<div class="row">
		<div class="col-sm-4">
			<img src="{{ $pelicula['poster'] }}" class="img-responsive" alt="Responsive image">
		</div>
		<div class="col-sm-8">
			<h2> {{ $pelicula['title'] }} </h2>
			<div> <b>Año:</b> {{ $pelicula['year'] }} </div>
			<div> <b>Director: </b> {{ $pelicula['director'] }} </div>
			<p> <b>Resumen: </b> {{ $pelicula['synopsis'] }} </p>
			<div> <b>Estado: </b> 
				@if($pelicula['rented'] == false)
					Pelicula disponible
				@else
					Pelicula actualmente alquilada
				@endif
			</div>
<br>
			<div>
				@if($pelicula['rented'] == false) 
					<button type="button" class="btn btn-primary"> Alquilar pelicula </button>
				@else
					<button type="button" class="btn btn-danger"> Devolver pelicula </button>
				@endif

				<button type="button" class="btn btn-warning">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edita pelicula
				</button>
				<button type="button" class="btn btn-default">
					<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Volver al listado
				</button>

			</div>
		</div>
	</div>

@stop