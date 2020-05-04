@extends('store.template')

@section('content')

@include('store.partials.slider')

<div class="container text-center">
	<div id="products">
		@foreach($products as $product)
			<div class="product white-panel">
				<h3>{{ $product->name }}</h3><hr>
				@if($product->image)
					<img src="{{ $product->image }}" width="200"><hr>
				@endif
				<div class="product-info panel">
					<p>{{ $product->extract }}</p>
					<h4><span class="badge badge-success">Precio: Bs.S {{ number_format($product->price,2) }}</span></h4>
					<p>
						<a class="btn btn-warning" href="{{ route('cart-add', $product->slug) }}">Comprar</a>&nbsp&nbsp&nbsp&nbsp
						<a class="btn btn-primary" href="{{ route('product-detail', $product->slug) }}">Mas Detalles</a>
					</p>
				</div>
			</div>
		@endforeach
	</div>
</div>
@stop