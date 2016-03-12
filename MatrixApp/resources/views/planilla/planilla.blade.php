
@extends('layouts.layoutAdmin')

@section('contenido')

{!!Html::style('estilosSubMenu.css')!!}
{!!Html::script('jquery.js')!!}
{!!Html::script('subMenuScript.js')!!}

<div>
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3" style="padding:0px;">   
         <!--submenu -->
         <div id='csssubmenu' style="width:100% !Important;">
            <ul>
               <li><a href='#'><span>Empleados</span></a></li>               
               <li><a href='#'><span>Permisos</span></a></li>
               <li><a href='#'><span>Subsidios</span></a></li>
               <li><a href='#'><span>Horas Extra</span></a></li>
               <li class='active has-sub'><a href='#'><span>Configuración</span></a>
                  <ul>
                     <li><a href='{{action('AreaController@index')}}'<span>Areas</span></a>
                     <li><a href='{{action('PuestoController@index')}}'><span>Puestos</span></a>
                     <li><a href='#'><span>Estados de Empleado</span></a>
                  </ul>
               </li>
               <li class='last'><a href='#'><span>Contact</span></a></li>
            </ul>
         </div>
      </div>
      <!--contenido -->
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-9">
         @yield('contenidoPlanilla')

      </div>
   </div>
</div>

<script type="text/javascript">
   $(document).ready(function(){
      $('#linkPlanilla').css('color','#333333');
      $('#linkPlanilla').css('background-color','#DACDCD');
   });
</script>

@stop