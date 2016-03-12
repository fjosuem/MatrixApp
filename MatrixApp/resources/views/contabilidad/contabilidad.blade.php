
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
               <li class='active has-sub'><a href='#'><span>Catálogo</span></a>
                  <ul>
                     <li><a href='{{ action('CuentaController@index') }}'><span>Cuentas</span></a>
                     <li><a href='#'><span>SubCuentas</span></a>                  
                  </ul>
               </li>
               <li class='active has-sub'><a href='#'><span>Products</span></a>
                  <ul>
                     <li class='has-sub'><a href='#'><span>Product 1</span></a>
                        <ul>
                           <li><a href='#'><span>Sub Product</span></a></li>
                           <li class='last'><a href='#'><span>Sub Product</span></a></li>
                        </ul>
                     </li>
                     <li class='has-sub'><a href='#'><span>Product 2</span></a>
                        <ul>
                           <li><a href='#'><span>Sub Product</span></a></li>
                           <li class='last'><a href='#'><span>Sub Product</span></a></li>
                        </ul>
                     </li>
                  </ul>
               </li>
               <li><a href='#'><span>About</span></a></li>
               <li class='last'><a href='#'><span>Contact</span></a></li>
            </ul>
         </div>
      </div>
      <!--contenido -->
      <div class="col-lg-10 col-md-10 col-sm-10 col-xs-9">
         @yield('contenidoContabilidad')

      </div>
   </div>
</div>

<script type="text/javascript">
   $(document).ready(function(){
      $('#linkContabilidad').css('color','#333333');
      $('#linkContabilidad').css('background-color','#DACDCD');
   });
</script>

@stop