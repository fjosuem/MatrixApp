@extends('contabilidad.contabilidad')

@section('contenidoContabilidad')

<p></p>

<p style="text-align:center; font-size:1.5em;">
	Cuentas
</p>	

<hr />

<table id="tablaGrupo" class="table table-striped table-responsive">
	<thead>
		<tr>
			<th>Nombre</th>
			<th></th>
		</tr>
	</thead>
	<tfoot>
        <tr>
            <th>Name</th>
            <th>Position</th>
        </tr>
    </tfoot>
	<tbody>
		@foreach($cuentas as $cuenta)
			<tr>			
				<td>{{$cuenta->nombre}}</td>
				<td></td>
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