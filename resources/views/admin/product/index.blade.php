@extends('admin.template')

@section('content')
<br><br>
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTOS <a href="{{ route('product.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Producto</a>
			</h1>
		</div><hr><br>
		<div class="page">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Editar</th>
							<th>Eliminar</th>
							<th>Imagen</th>
							<th>Nombre</th>
							<th>Categoría</th>
							<th>Extracto</th>
							<th>Precio</th>
							<th>Visible</th>
						</tr>
					</thead>
					<tbody>
						@foreach($products as $product)
							<tr>
								<td>
									<a href="{{ route('product.edit', $product->slug) }}" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a>
								</td>
								<td>
									{!! Form::open(['route' => ['product.destroy', $product->slug]])
									!!}
										<input type="hidden" name="_method" value="DELETE">
										<button onclick="return confirm('Seguro que desea Eliminar el Registro?')" class="btn btn-danger">
											<i class="fa fa-trash-o"></i>
										</button>
									{!! Form::close() !!}
								</td>
								<td>
									@if($product->image)
										<img src="{{ $product->image }}" width="80">
									@endif
								</td>
								<td>{{ $product->name }}</td>
								<td>{{ $product->category->name }}</td>
								<td>{{ $product->extract }}</td>
								<td>{{ number_format($product->price,2) }}</td>
								<td>{{ $product->visible == 1 ? "Si" : "No" }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<hr>
			<?php echo $products->render(); ?>
		</div>
	</div><br>

@stop