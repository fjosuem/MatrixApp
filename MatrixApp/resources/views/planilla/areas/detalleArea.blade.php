@extends('planilla.planilla')

@section('contenidoPlanilla')

@if(Session::has('nuevo'))
	{!!Form::open(['route'=>'area.store', 'method'=>'POST'])!!}
@endif

@if(Session::has('editar'))
	{!!Form::model($area,['route'=> ['area.update', $area->id], 'method'=>'PUT'])!!}
@endif

	</br>
		<div class="panel">
			<div class="form-group">
				{!!Form::label('Área:')!!}
				{!!Form::text('nombre', null,['class'=>'form-control','placeholder' => 'Ingrese el nombre del Área' ])!!}
				
			</div>
		</div>
		{{Form::submit('Aceptar', ['class'=>'btn btn-success'])}}
			
	{!!Form::close()!!}		
@stop