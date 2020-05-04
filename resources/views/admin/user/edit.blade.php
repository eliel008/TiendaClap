@extends('admin.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-user"></i> USUARIOS <small>[ Editar Usuario ]</small>
			</h1>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-offset-3 col-md-6">
				<div class="page">
					@if(count($errors) > 0)
						@include('admin.partials.errors')
					@endif

					{!! Form::model($user, array('route' => array('user.update', $user))) !!}

						<input type="hidden" name="_method" value="PUT">

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
							{!! Form::label('type', 'Tipo de Usuario:') !!}&nbsp&nbsp&nbsp

							{!! Form::radio('type', 'user', $user->type=='user' ? true : false) !!} user&nbsp&nbsp
							{!! Form::radio('type', 'admin', $user->type=='admin' ? true : false) !!} admin&nbsp&nbsp
							{!! Form::radio('type', 'vocero', $user->type=='vocero' ? true : false) !!} vocero&nbsp&nbsp
							{!! Form::radio('type', 'voceroP', $user->type=='voceroP' ? true : false) !!} voceroP
						</div>
						<div class="form-group">
							{!! Form::label('active', 'Activo:') !!}

							{!! Form::checkbox('active', null, $user->active == 1 ? true : false) !!}
						</div><hr>
						<fieldset>
							<legend>Cambiar Contraseña</legend>
							<div class="form-group">
								{!! Form::label('password', 'Nueva Contraseña:') !!}
								{!! Form::password(
								'password',
									[
										'class' => 'form-control',
										'placeholder' => 'Ingresa la Contraseña...',
									])
								!!}
							</div>
							<div class="form-group">
								{!! Form::label('confirm_password', 'Confirmar Nueva Contraseña:') !!}
								{!! Form::password(
								'password_confirmation',
									[
										'class' => 'form-control',
										'placeholder' => 'Repite la Contraseña...',
									])
								!!}
							</div>
						</fieldset><hr>
						<div class="form-group">
							{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
							<a href="{{ route('user.index') }}" class="btn btn-warning">Cancelar</a>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@stop