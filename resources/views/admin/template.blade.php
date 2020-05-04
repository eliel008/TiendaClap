<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Tienda Clap Movilnet  -  Dashboard</title>
		<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/lumen/bootstrap.min.css" rel="stylesheet" integrity="sha384-715VMUUaOfZR3/rWXZJ9agJ/udwSXGEigabzUbJm2NR4/v5wpDy8c14yedZN6NL7" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Merriweather|Poiret+One&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
	</head>
	<body>

		@if(\Session::has('message'))
			@include('admin.partials.message')
		@endif
		@include('admin.partials.nav')
		@yield('content')
		@include('admin.partials.footer')

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="{{ asset('js/pinterest_grid.js') }}"></script>
		<script src="{{ asset('admin/js/main.js') }}"></script>
	</body>
</html>