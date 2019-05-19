<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="/css/estilos.css">
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="container">
     <div class="encabezado">
      <img src="/logoRojo.jpg" alt="">
    </div><!--DIV ENCABEZADO-->
    <!--DIV de los datos generales del alumno-->
    <div class="contenedorDatos"> <!--inicio del div contenedor de datos y de la foto-->
        <img src="/usuario.png">
      <div  class="DatosGenerales"> <!--DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
        <div class="row fila1">
          <div class="col-3 columna1"> Clave UASLP:
          </div>
          <div class="col-5">
              <label name="clave">{{$alumno->claveUnica}}</label>
          </div>
          <div class="col-4 columna1" style="">Fecha:{{$fecha}} </div>
          <div class="col-8">
          </div>
        </div>

        <div class="row fila1">
          <div class="col-3 columna1">Clave Ingenier&iacutea:</div>
          <div class="col-5">
              <label>{{$alumno->claveIngenieria}}</label>
          </div>
          <div class="col-4"></div>
        </div>

        <div class="row fila1">
          <div class="col-3 columna1"> Nombre:
          </div>
          <div class="col-5">
              <label name="nombre">{{$alumno->Nombre}}</label>
          </div>
          <div class="col-4 colfecha"></div><!--aqui iba situaciÃ³n-->
        </div>

        <div class="row fila1">
          <div class="col-3 columna1">Carrera: </div>
          <div class="col-5">
              <label name="carrera">{{$alumno->carrera}}</label>
          </div>
          <div class="col-4"></div>
        </div>

        <div class="row fila1">
          <div class="col-3 columna1">Asesor: </div>
          <div class="col-5">
              <label>{{$tutor->Nombre}}</label>
          </div>
          <div class="col-4 columna2"></div><!--aqui iba condicion-->
        </div>
        
        <div class="row fila1">
          <div class="col-3 columna1">Semestre: </div>
          <div class="col-5">
              <label>{{$alumno->semestre}}</label>
          </div>
          <div class="col-4"></div>
        </div>
     </div> <!-- FIN DEL DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
    </div>
  <!--fin del div contenedor de datos y de la foto-->

      <!---INICIO MENU--->
    <div class="menu">
     
        <ul><!--primer ul--->
          <li class="menuitem" >
            <a href="#" >Registrar Solicitud</a>
             <ul class="submenu">
               <li>
                  <a href="/datosPracticasProfesionales/{{$alumno->claveUnica}}">Datos Practicas Profesionales
                  </a>
               </li>
                <li>
                  <a href="/datosEmpresa/{{$alumno->claveUnica}}">Datos de la Empresa
                  </a>
                </li>
                 
                <li>
                  <a href="/datosAsesor/{{$alumno->claveUnica}}">Datos del Asesor de la Empresa</a>
                </li>
            </ul>
        </li>
        
        @if(isset($solicitud) && ($solicitud->statusSolicitud == "Aprobada"))
              <li class="menuitem" >
                  <a href="/reportes/{{$alumno->claveUnica}}" >Subir Reportes</a>
              </li>            
        @endif
          @if((isset($solicitud->idAcreditacionTutorAcademico)) && (isset($solicitud->idAcreditacionTutorAcademico)))
            <li class="menuitem" >
                <a href="/alumnoAutorizaciones/{{$alumno->claveUnica}}" >Autorizaciones</a>
            </li>            
          @endif
        <li class="menuitem">
          <a href="#">Ayuda</a>
        
        </li>
        <li class="menuitem" >
          <a href="/">Cerrar Sesión</a>
        </li>
      </ul><!--fin del primer ul--->
    </div>
    <!---FIN DIV MENU---> 

      <!--DIV PARA EL LLENADO DE LA SOLICITUD-->
    <div class="tituloAutorizaciones">
      <p class="textoAutorizaciones">AUTORIZACIONES</p>
    </div><!--DIV titulo-->
    <div class="tituloDatosTutorAcademico">
      <p>TUTOR ACADÉMICO</p>
    </div>
           <!--DIV  que contiene los datos que se le piden al alumno para subir el reporte-->
    <div class="datosAutorizaciones" style="background-color: (198,217,241)">
      <div class="row fechaAutorizacionTutor"><!--DIV row1-->
        <div class="col-3 colum1 -sm tituloFechaAutorizacionTutor">Fecha de Autorización: </div>
          <div class="col-5 labeltutor">
            <label>{{$alAutorizacion->fechaAutorizacionTutorAcademico}}</label>
          </div>                  
       </div><!--DIV row1-->
        
      <div class="row divComentariosTutor"><!--DIV row4-->
        <div class="col-3 colum11 -sm textoComentariosTutor" style="background-color: rgb(26,50,86)">Comentarios: </div>
        <div class="col-9 labelcomentarios -sm">
            <label>{{$alAutorizacion->comentariosTutorAcademico}}</label>
        </div>
      </div><!--DIV row4--> 

      <div class="tituloEncargado1">
        <p>ENCARGADO PRACTICAS</p>
      </div>
          <!--DIV que contiene los datos que se le piden al alumno para subir el reporte-->
      <div class="autorizacionEncargado">
        <div class="row datosFechaAutorizacionEncargado"><!--DIV row1-->
          <div class="col-3 colum1 -sm textoFechaEncargado">Fecha de Autorización: </div>
            <div class="col-5 actividades2">
              <label>{{$alAutorizacion->fechaAutorizacionEncargado}}</label>
            </div>
        </div><!--DIV row1-->
        
        <div class="row ComentariosEncargado"><!--DIV row4-->
          <div class="col-3 colum11 -sm textoComentariosEncargado" style="  background-color: rgb(26,50,86);  ">
            <p>Comentarios: </p>
          </div>
          <div class="col-9 actividades1 -sm">
              <label>{{$alAutorizacion->comentariosEncargado}}</label>
          </div>
        </div><!--DIV row4--> 
      </div>
    </div>  
  </div><!--container-->
</body>

</html>