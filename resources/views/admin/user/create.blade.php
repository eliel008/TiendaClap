@extends('admin.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-user"></i> USUARIOS <small>[ Agregar Usuario ]</small>
			</h1>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-offset-3 col-md-6">
				<div class="page">
					@if(count($errors) > 0)
						@include('admin.partials.errors')
					@endif

					{!! Form::open(['route' => 'user.store']) !!}

						<div class="form-group">
							{!! Form::label('name', 'Nombre:') !!}
							{!! Form::text(
								'name',
								null,
								[
									'class' => 'form-control',
									'placeholder' => 'Ingresa el nombre...',
									'autofocus' => 'autofocus',
								])
							!!}
						</div>
						<div class="form-group">
							{!! Form::label('last_name', 'Apellido:') !!}
							{!! Form::text(
								'last_name',
								null,
								[
									'class' => 'form-control',
									'placeholder' => 'Ingresa el Apellido...',
									'autofocus' => 'autofocus',
								])
							!!}
						</div>
						<div class="form-group">
							{!! Form::label('ci', 'CI:') !!}
							{!! Form::text(
								'ci',
								null,
								[
									'class' => 'form-control',
									'placeholder' => 'Ingresa la cedula de identidad...',
								])
							!!}
						</div>
						<div class="form-group">
							{!! Form::label('piso', 'Piso:') !!}
							{!! Form::number(
								'piso',
								null,
								[
									'class' => 'form-control',
									'placeholder' => 'Ingresa el número del piso...',
								])
							!!}
						</div>
						<div class="form-group">
							{!! Form::label('email', 'Email:') !!}
							{!! Form::email(
								'email',
								null,
								[
									'class' => 'form-control',
									'placeholder' => 'Ingresa el correo electrónico...',
								])
							!!}
						</div>
						<div class="form-group">
							{!! Form::label('password', 'Contraseña:') !!}
							{!! Form::password(
								'password',
								[
									'class' => 'form-control',
									'placeholder' => 'Ingresa la Contraseña...',
								])
							!!}
						</div>
						<div class="form-group">
							{!! Form::label('confirm_password', 'Confirmar Contraseña:') !!}
							{!! Form::password(
								'password_confirmation',
								[
									'class' => 'form-control',
									'placeholder' => 'Repite la Contraseña...',
								])
							!!}
						</div><hr>
						<div class="form-group">
							{!! Form::label('type', 'Tipo de Usuario:') !!}&nbsp&nbsp&nbsp

							{!! Form::radio('type', 'user', true) !!} user&nbsp&nbsp
							{!! Form::radio('type', 'admin') !!} admin&nbsp&nbsp
							{!! Form::radio('type', 'vocero') !!} vocero&nbsp&nbsp
							{!! Form::radio('type', 'voceroP') !!} voceroP
						</div>
						<div class="form-group">
							{!! Form::label('active', 'Activo:') !!}

							{!! Form::checkbox('active', null, true) !!}
						</div>
						<div class="form-group">
							{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
							<a href="{{ route('user.index') }}" class="btn btn-warning">Cancelar</a>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@stop