@extends('admin.template')

@section('content')
<br><br>
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-user"></i> USUARIOS
				<a href="{{ route('user.create') }}" class="btn btn-warning">
					<i class="fa fa-plus-circle"></i> Usuario
				</a>
			</h1>
		</div><hr><br>
		<div class="page">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Editar</th>
							<th>Eliminar</th>
							<th>Nombre</th>
							<th>Apellido</th>
							<th>CI</th>
							<th>Piso</th>
							<th>Correo</th>
							<th>Tipo</th>
							<th>Activo</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
							<tr>
								<td>
									<a href="{{ route('user.edit', $user) }}" class="btn btn-primary">
										<i class="fa fa-pencil-square-o"></i>
									</a>
								</td>
								<td>
									{!! Form::open(['route' => ['user.destroy', $user]]) !!}
										<input type="hidden" name="_method" value="DELETE">
										<button onclick="return confirm('¿Seguro que desea Eliminar este Registro?')" class="btn btn-danger">
											<i class="fa fa-trash-o"></i>
										</button>
									{!! Form::close() !!}
								</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->last_name }}</td>
								<td>{{ $user->ci }}</td>
								<td>{{ $user->piso }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->type }}</td>
								<td>{{ $user->active == 1 ? "Si" : "No" }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<hr>
			<?php echo $users->render(); ?>
		</div>
	</div><br>

	@stop