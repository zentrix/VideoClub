<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Peliculas</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}">

	</head>
	<body>
		@include('partials.navbar')

		<div class="container">
			@yield('content')
		</div>

		<!-- jQuery -->
		<script src="{{ url('/assets/jquery/jquery.min.js') }}"></script>
		<!-- Bootstrap JavaScript -->
		<script src="{{ url('/assets/bootstrap/js/bootstrap.min.js') }}" ></script>
	</body>
</html>