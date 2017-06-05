@extends('layouts.app')

@section('content')
	
	<div class="row" style="margin-top:20px">

		<div class="col-md-offset-3 col-md-6">

			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title text-center">
						<span class="glyphicon glyphicon-film" aria-hidden="true"></span>
						Modificar película
					</h3>
				</div>

				<div class="panel-body" style="padding:30px">
				
					{{-- TODO: Abrir el formulario e indicar el método POST --}}
					<form method="POST" >
						{{-- TODO: Envío Mediante PUT --}}
						{{ method_field('PUT') }}						

						{{-- TODO: Protección contra CSRF --}}
	    				{{ csrf_field() }}

	    				<div class="form-group">
	    					<label for="title">Título</label>
	    					<input type="text" name="title" id="title" class="form-control" value="{{ $pelicula->title }}">
						</div>

						<div class="form-group">
							{{-- TODO: Completa el input para el año --}}
							<label for="year"> Año</label>
							<input type="text" name="year" id="year" class="form-control" value="{{ $pelicula->year }}">
						</div>

						<div class="form-group">
							{{-- TODO: Completa el input para el director --}}
							<label for="director"> Director</label>
							<input type="text" name="director" id="director" class="form-control" value="{{ $pelicula->director }}">
						</div>

						<div class="form-group">
							{{-- TODO: Completa el input para el poster --}}
							<label for="poster"> Poster</label>
							<input type="text" name="poster" id="psoter" class="form-control" value="{{ $pelicula->poster }}">
						</div>

						<div class="form-group">
							<label for="synopsis">Resumen</label>
	    					<textarea name="synopsis" id="synopsis" class="form-control" rows="3">
	    						{{ $pelicula->synopsis }}
	    					</textarea>
						</div>

						<div class="form-group text-center">
							<button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
								Modificar película
							</button>
						</div>
					</form>
					{{-- TODO: Cerrar formulario --}}s

				</div>
			</div>
		</div>
	</div>

@stop
