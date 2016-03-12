<!DOCTYPE html>
<html lang='en'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Sistema Fénix</title>
   {!!Html::style('estilosMenuBar.css')!!}   
   {!!Html::style('bootstrap.css')!!}   
   {!!Html::style('jquery.dataTables.css')!!}  
   {!!Html::script('jquery.js')!!}

</head>
<body style="margin:0px;">
   
   <div id='cssmenu' style="border-radius:0px;">
      <ul>
         <li><a id="linkHome" href='{{ action('PrincipalController@admin') }}'>Inicio</a></li>
         <!--<li class='active'><a href='#'>Products</a>
            <ul>
               <li><a href='#'>Product 1</a>
                  <ul>
                     <li><a href='#'>Sub Product</a></li>
                     <li><a href='#'>Sub Product</a></li>
                  </ul>
               </li>
               <li><a href='#'>Product 2</a>
                  <ul>
                     <li><a href='#'>Sub Product</a></li>
                     <li><a href='#'>Sub Product</a></li>
                  </ul>
               </li>
            </ul>
         </li> -->
         <li>
            <a id="linkPlanilla" href='{{ action('PrincipalController@planilla')}}'>Planilla</a>            
         </li>
         <li>
            <a href='#'>Inventario</a>            
         </li>
         <li>
            <a id="linkContabilidad" href='{{ action('PrincipalController@contabilidad') }}'>Contabilidad</a>
         </li>
         <li><a href='#'>Acerca de</a></li>
         <li><a href='#'>Contáctanos</a></li>
      </ul>
   </div>


   <div id='divContenido'>
      @yield('contenido')
   </div>
      
   
   {!!Html::script('jquery.dataTables.js')!!}
   {!!Html::script('menuScript.js')!!}
   {!!Html::script('bootstrap.js')!!}


</body>
<html>