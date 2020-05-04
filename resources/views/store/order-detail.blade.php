@extends('store.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> Detalle del Pedido</h1>
		</div><hr>
		<div class="page">
			<div class="table-responsive">
				<h3>Datos Del Usuario</h3>
				<table class="table table-striped table-hover table-bordered">
					<tr><td>Nombre y Apellido:</td><td>{{ Auth::user()->name . " " . Auth::user()->last_name }}</td></tr>
					<tr><td>Cédula de Identidad</td><td>{{ Auth::user()->ci }}</td></tr>
					<tr><td>Piso</td><td>{{ Auth::user()->piso }}</td></tr>
				</table>
			</div>
			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>SubTotal</th>
					</tr>
					@foreach($cart as $item)
						<tr>
							<td>{{ $item->name }}</td>
							<th>{{ number_format($item->price,2) }}</th>
							<td>{{ $item->quantity }}</td>
							<td>{{ number_format($item->price * $item->quantity,2) }}</td>
						</tr>
					@endforeach
				</table><hr>
				<h3>
					<span class="badge badge-success">
						Total: Bs.S {{ number_format($total,2) }}
					</span>
				</h3><hr>
				<p>
					<a href="{{ route('cart-show') }}" class="btn btn-primary">
						<i class="fa fa-chevron-circle-left"></i> Regresar
					</a>
					<a href="#" class="btn btn-warning">
						Pagar <i class="fa fa-dollar"></i>
					</a>
				</p>
			</div>
		</div>
	</div>

@stop