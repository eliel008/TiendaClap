@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header"><br>
			<h1>
				<i class="fa fa-shopping-cart"></i>
				CATEGORÍAS <small>[Agregar Categoría]</small>
			</h1>
		</div><hr>
		<div class="row justify-content-center">
			<div class="col-md-offset-3 col.md-6">
				<div class="page">
					@if(count($errors) > 0)
						@include('admin.partials.errors')
					@endif

					{!! Form::open(['route'=>'category.store']) !!}

						<div class="form-group">
							{!! Form::label('name', 'Nombre:') !!}
							{!!
								Form::text(
									'name',
									null,
									array(
										'class'=>'form-control',
										'placeholder' => 'Ingresa el nombre...',
										'autofocus' => 'autofocus'
									)
								)
							!!}
						</div>
						<div class="form-group">
							{!! Form::label('description', 'Descipción:') !!}
							{!!
								Form::textarea(
									'description',
									null,
									array(
										'class' => 'form-control'
									)
								)
							!!}
						</div>
						<div class="form-group">
							{!! Form::label('color', 'Color:') !!}
							<input type="color" name="color" class="form-control">
						</div>
						<div class="form-group">
							{!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
							<a href="{{ route('category.index') }}" class="btn btn-warning">	Cancelar
							</a>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@stop