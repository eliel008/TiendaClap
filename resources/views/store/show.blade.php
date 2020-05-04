@extends('store.template')

@section('content')
<div class="container text-center">
	<div class="page-header"><br>
		<h1>Detalle del Producto</h1>
	</div><br><hr>

	<div class="row">
		<div class="col-md-6">
			<div class="product-block">
				<img src="{{ $product->image }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="product-block">
				<h3>{{ $product->name }}</h3><hr>
				<div class="product-info panel">
					<p>{{ $product->description }}</p>
					<h4>
						<span class="badge badge-success">Precio: Bs.S {{ number_format($product->price,2) }}</span>
					</h4>
					<p>
						<a class="btn btn-warning btn-block" href="{{ route('cart-add', $product->slug) }}">Comprar</a>
					</p>
				</div>
			</div>
		</div>
	</div><hr>
	<p>
		<a class="btn btn-primary" href="{{ route('home') }}">Regresar</a>
	</p>
</div>
@stop