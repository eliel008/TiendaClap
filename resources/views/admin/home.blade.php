@extends('admin.template')

@section('content')

	<br><br><div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-rocket"></i> Tienda Clap Movilnet  -  DASHBOARD</h1>
		</div><br>
		<h2>Bienvenido(a) {{ Auth::user()->name }} al panel de administración de Tienda Clap Movilnet.</h2><hr><br>
		<div class="row">
			<div class="col-md-6">
				<div class="panel">
					<i class="fa fa-list-alt icon-home"></i>
					<a href="{{ route('category.index') }}" class="btn btn-warning btn-block btn-home-admin">CATEGORÍAS</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel">
					<i class="fa fa-shopping-cart icon-home"></i>
					<a href="{{ route('product.index') }}" class="btn btn-warning btn-block btn-home-admin">PRODUCTOS</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel">
					<i class="fa fa-file-pdf-o icon-home"></i>
					<a href="#" class="btn btn-warning btn-block btn-home-admin">REPORTES</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel">
					<i class="fa fa-users icon-home"></i>
					<a href="{{ route('user.index') }}" class="btn btn-warning btn-block btn-home-admin">USUARIOS</a>
				</div>
			</div>
		</div><br>
	</div>

@endsection