@extends('admin.template')

@section('content')
<br><br>
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				CATEGORÍAS <a href="{{ route('category.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Categoría</a>
			</h1>
		</div><hr>
		<div class="page">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Editar</th>
							<th>Eliminar</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Color</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $category)
							<tr>
								<td>
									<a href="{{ route('category.edit', $category) }}" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a>
								</td>
								<td>
									{!! Form::open(['route' => ['category.destroy', $category]])
									!!}
										<input type="hidden" name="_method" value="DELETE">
										<button onclick="return confirm('Seguro que desea Eliminar el Registro?')" class="btn btn-danger">
											<i class="fa fa-trash-o"></i>
										</button>
									{!! Form::close() !!}
								</td>
								<td>{{ $category->name }}</td>
								<td>{{ $category->description }}</td>
								<td>{{ $category->color }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<hr>
			<?php echo $categories->render(); ?>
		</div>
	</div><br>

@stop