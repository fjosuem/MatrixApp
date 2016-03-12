@extends('planilla.planilla')

@section('contenidoPlanilla')

@if(Session::has('nuevo'))
	{!!Form::open(['route'=>'puesto.store', 'method'=>'POST'])!!}
@endif

@if(Session::has('editar'))
	{!!Form::model($puesto,['route'=> ['puesto.update', $puesto->id], 'method'=>'PUT'])!!}
@endif

	</br>
		<div class="panel">
			<div class="form-group">
				{!!Form::label('Puesto:')!!}
				{!!Form::text('nombre', null,['class'=>'form-control','placeholder' => 'Ingrese el nombre del Puesto' ])!!}
				
			</div>
		</div>
		{{Form::submit('Aceptar', ['class'=>'btn btn-success'])}}
			
	{!!Form::close()!!}		
@stop