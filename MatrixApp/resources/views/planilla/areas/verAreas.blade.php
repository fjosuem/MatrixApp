 <!-- Vista con SubMenús a la Izquierda -->
@extends('planilla.planilla')

<!-- Contenido a la par de los SubMenús -->
@section('contenidoPlanilla')

<!--Mensajes de Alertas para CRUD -->
@include('alerts.success')

<p></p>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">        
    <p style="text-align:center; font-size:1.5em;">
        Áreas
    </p>            
</div>	

<hr />

<table id="tablaGrupo" class="table table-striped table-responsive">
	<thead>
		<tr>
			<th>Área</th>
            <th style="width: 1%;"></th>

			<th style="width: 1%;">
                <a href="{{URL::to('/')}}/area/create" style="float:right;" data-toggle="tooltip" title="Nueva Área" class="btn btn-primary btn-sm">
                    <span style="color:white; font-weight:bold;" class="glyphicon glyphicon-plus"></span> 
                </a>
            </th>
		</tr>
	</thead>
	<tfoot>
        <tr>
            <th>Área</th>
            <th></th>
            <th>
                <a href="{{URL::to('/')}}/area/create" style="float:right;" data-toggle="tooltip" title="Nueva Área" class="btn btn-primary btn-sm">
                    <span style="color:white; font-weight:bold;" class="glyphicon glyphicon-plus"></span> 
                </a>
            </th>
        </tr>
    </tfoot>
	<tbody>
		@foreach($areas as $area)
			<tr>			
				<td>{{$area->nombre}}</td>

                <td style="width: auto;">{!!link_to_route('area.edit', $title = "Editar", $parameters = $area -> id, $attributes = ['class' => 'btn btn-primary btn-sm', 'data-toggle' => "tooltip", 'title' => 'Editar Área'])!!}</td>
                <td style="width: auto;">
                
                    {!!Form::open(['route' => ['area.destroy', $area -> id] , 'method' => 'DELETE'])!!}  
                        {!!Form::submit('Remover', ['class' => 'btn btn-danger', 'data-toggle' => "tooltip", 'title' => 'Remover Área'])!!}
                    {!!Form::close()!!}

                </td>
			</tr>
		@endforeach
	</tbody>	
</table>

<script>
	$(document).ready(function(){
		$('#tablaGrupo').DataTable({
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros encontrados: 0",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                }
            }
        });
	});
</script
	

@stop