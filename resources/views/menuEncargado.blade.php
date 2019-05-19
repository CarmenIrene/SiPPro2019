<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Index</title>
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" href="/css/estilos.css">
</head>
<body>
  
<div class="container">
    <div class="encabezado">
      <img src="/logoRojo.jpg" alt="">
    </div><!--DIV ENCABEZADO-->
    <!--DIV de los datos generales del alumno-->
    <div class="tutorDiv"> <!--inicio del div contenedor de datos y de la foto-->
       <!-- <img src="/usuario.png" style="position: relative; left:100px; width: 15%">-->
      <div class="tutorDiv2"> <!--DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
      
        <div class="row rowRPE" >
          <div class="col-3 colRPE" > RPE:
          </div>
          <div class="col-5">
             <label> {{$encargado->rpe}}</label>
          </div>
          <div class="col-4 colFecha" > Fecha: {{$fecha}}
          </div>
        </div>
        <div class="row">
          <div class="col-3 colBienvenido"> BIENVENIDO :
          </div>
          <div class="col-5">
            <label>{{$encargado->nombre}}</label>            
          </div>
          <div class="col-4 colNombreTutor" >
          </div><!--aqui iba situaciÃ³n-->
        </div>        
     </div> <!-- FIN DEL DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
    </div>
  <!--fin del div contenedor de datos y de la foto-->


    <div class="menuTutor">
      <ul><!--primer ul--->
        <li class="menuitem"  >
          <a href="#">Prácticas Profesionales
           </a>
          <ul class="submenuRegistroTutor" >
              <li style="">
                  <a href="/encargadoSolicitudesPendientes/{{$encargado->rpe}}">Solicitudes Pendientes de Autorizar</a>
              </li>
          </ul>
            <ul class="submenuRegistroTutor" >
              <li>
                    <a href="/encargadoReportesPendientes/{{$encargado->rpe}}">Reportes Pendientes de Autorizar</a>
              </li>  
          </ul>

          <ul class="submenuRegistroTutor" >
              <li>
                    <a href="/encargadoEmpresasPendientes/{{$encargado->rpe}}">Empresas pendientes de autorizar</a>
              </li>  
          </ul>
         
        </li>


        <li class="menuitem" >
          <a href="#">Proceso de Prácticas Profesionales
          </a>
          <ul class="submenuRegistroTutor">
              <li><a href="#" >Diagrama de Proceso
                  </a>
              </li>   
          </ul>
          <ul class="submenuRegistroTutor" >
              <li>
                <a href="#">Proceso
                </a>
              </li>   
          </ul>
          <ul class="submenuRegistroTutor" >
              <li>
                <a href="#">Preguntas Frecuentes
                </a>
              </li>   
          </ul>
        </li>
     

        <li class="menuitem">
          <a href="#" >Ayuda</a>
        </li>
        <li class="menuitem">
          <a href="/">Cerrar Sesión</a>
        </li>
      </ul><!--fin del primer ul--->
    </div><!--fin div menu--->

 </div>
</body>
</html>