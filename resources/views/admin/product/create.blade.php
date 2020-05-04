@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header"><br>
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTOS <small>[Agregar Producto]</small>
			</h1>
		</div><hr>
		<div class="row justify-content-center">
			<div class="col-md-offset-3 col.md-6">
				<div class="page">
					@if(count($errors) > 0)
						@include('admin.partials.errors')
					@endif

					{!! Form::open(['route'=>'product.store', 'files' => true]) !!}
						<div class="form-group">
							{!! Form::label('category_id', 'Categoría:') !!}
							{!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('name', 'Nombre:') !!}
							{!!
								Form::text(
									'name',
									null,
									array(
										'class' => 'form-control',
										'placeholder' => 'Ingresa el Nombre...',
										'id' => 'name',
										'autofocus' => 'autofocus'
									)
								)
							!!}
						</div>
						{{--<div class="form-group">
							{!! Form::label('slug', 'URL Amigable:') !!}
							{!!
								Form::text(
									'name',
									null,
									array(
										'class' => 'form-control',
										'id' => 'slug',
									)
								)
							!!}
						</div>--}}
						<div class="form-group">
							{!! Form::label('extract', 'Extracto:') !!}
							{!!
								Form::text(
									'extract',
									null,
									array(
										'class' => 'form-control',
										'placeholder' => 'Ingresa el Extracto...'
									)
								)
							!!}
						</div>
						<div class="form-group">
							{!! Form::label('description', 'Descripción:') !!}
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
							{!! Form::label('price', 'Precio:') !!}
							{!!
								Form::text(
									'price',
									null,
									array(
										'class' => 'form-control'
									)
								)
							!!}
						</div>
						<div class="form-group">
							{!! Form::label('image', 'Imagen') !!}
							{!!
								Form::file(
									'image',
									null,
									array(
										'class' => 'form-control'
									)
								)
							!!}
						</div>
						<div class="form-group">
							{!! Form::label('visible', 'Visible:') !!}
							{!!
								Form::checkbox(
									'visible',
									null,
									array(
										'class' => 'form-control'
									)
								)
							!!}
						</div>

						<div class="form-group">
							{!! Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
							<a href="{{ route('product.index') }}" class="btn btn-warning">	Cancelar
							</a>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

@stop