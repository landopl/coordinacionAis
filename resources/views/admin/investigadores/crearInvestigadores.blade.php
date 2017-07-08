@extends('admin.plantilla.layout')

@section('content')

	@section('h1', 'Registrar Investigadores')


	<div class="form-horizontal">
		{!! Form::open(['route' => 'investigadores.store', 'method' => 'POST']) !!}

		<div class="form-group">
			
			{!! Form::label('nombre', 'Nombre', ['class' => 'control-label col-xs-3']) !!}
			{!! Form::text('nombre', null, ['class' => 'col-sm-5', 'required']) !!}
		</div>

		<div class="form-group">
			
			{!! Form::label('apellido', 'Apellido', ['class' => 'control-label col-xs-3']) !!}
			{!! Form::text('apellido', null, ['class' => 'col-sm-5','required']) !!}
		</div>

		<div class="form-group">
			
			{!! Form::label('cedula', 'Cedula', ['class' => 'control-label col-xs-3']) !!}
			{!! Form::text('cedula', null, ['class' => 'col-sm-5','required']) !!}
		</div>

		<div class="form-group">
			<div class="col-xs-offset-3 col-xs-9">
				<label class="radio-inline">
					<b>{{ 'Sexo' }}</b><br>
					<input type="radio" name="sexo" value= "femenino" checked>Femenino<br>
					<input type="radio" name="sexo" value= "masculino" checked>Masculino<br>
				</label>
			</div>
		</div>

		<div class="form-group">
			
			{!! Form::label('correo', 'Correo', ['class' => 'control-label col-xs-3']) !!}
			{!! Form::email('correo', null, ['class' => 'col-sm-5','required']) !!}
		</div>

		<div class="form-group">
			
			{!! Form::label('telefono', 'Telefono', ['class' => 'control-label col-xs-3']) !!}
			{!! Form::text('telefono', null, ['class' => 'col-sm-5','required']) !!}
		</div>

		<div class="form-group">
			
				<select class="col-xs-offset-3" name="linea">
					<option>Seleccione la linea de investigacion</option>
					@foreach($lineas as $linea)
						<option value="{{$linea->id}}">{{$linea->denominacion}}</option>
					@endforeach
				</select>
			
		</div>

		<div class="form-group">
			<div class="col-xs-offset-3 col-xs-9">
				<label class="radio-inline">
					
					<b>{{ 'Seleccione el tipo de investigador' }}</b><br>
					@foreach($tipos as $tipo)
						<input type="radio" name="tipo_id" value= {!! $tipo['tipo_id'] !!} checked>{{ $tipo['tipo_investigador']}}<br>
					@endforeach
				</label>
			</div>
		</div>

		{{ Form::hidden('fecha_registro_investigador', $fecha_registro_investigador = date("Y-m-d")) }}                       
		<div class="form-group">
			<div class="col-xs-offset-3 col-xs-9">
				{!! Form::submit('Registrar', ['class' => 'btn btn-success btn-flat'])!!}
			</div>
			
		</div>
	{!! Form::close() !!}
	</div>

	
@stop