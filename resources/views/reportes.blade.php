<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Index</title>
  <link rel="stylesheet" href="/css/estilos.css">
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script>
    $(document).ready(function()
    {
       $("#mostrarmodal").modal("show");
    });
  </script>
  
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
        
        @if(isset($solicitud))
          @if($solicitud->statusSolicitud == "Aprobada")
              <li class="menuitem" >
                  <a href="/reportes/{{$alumno->claveUnica}}" >Subir Reportes</a>
              </li>            
          @endif
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
    
<!--DIV que contiene los datos que se le piden al alumno-->
      <form method="POST" action="/GuardaDatosReportes/{{$alumno->claveUnica}}" class="formGuardaDatosAlSol" enctype="multipart/form-data">
        @csrf
        <div class="AlumnoRep" >

          <div class="row rowReportes1"><!--DIV row1-->
            <div class="col-2 colum1 -sm">
              <p>Número de Reporte :</p>
            </div>
            <div class="col-10 -sm col10">
             <select class="form-control formcontrol" name="numReporte" id="">
               <option value="">Selecciona una opci&oacuten</option>
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
               <option>6</option>
               <option>7</option>
               <option>8</option>
               <option>9</option>
               <option>10</option>
               <option>REPORTE FINAL</option>
            </select>
            </div>       
          </div><!--DIV row1-->

              <!--DIV row3-->
          <div class="row rowReportesPeriodo">
            <div class="col-2 colum1 -sm" >
              <p>Per&iacuteodo :</p>
            </div>
            <div class="col-2 fecha1 -sm">
              <p>Fecha Inicio :</p>
            </div>
            <div class="col-3 fechainput1 -sm " >
              <input type="date" class="form-control input-sm" name="fechaInicio" required>
            </div>
            <div class="col-2 fecha2 -sm">
              <p>Fecha Fin :</p>
            </div>
            <div class="col-3 fechainput2 -sm">
              <input type="date" class="form-control input-sm" name="fechaFin" required>
            </div>
          </div><!--DIV row3-->

          <div class="row rowrep" style="left: 92px; bottom: 50px"><!--DIV row4-->
            <div class="col-2 columnrep" >
              <p>Actividades que se realizaron:</p>
            </div>
            <div class="col-10 actividades -sm">
              <textarea class="form-control" name="acts" rows="3"></textarea>
            </div>
          </div><!--DIV row4--> 

          <!--div row12-->
         <form method="POST" enctype="multipart/form-data" action="/storage/create" class="formGuardaDatosAlSol">
        @csrf
        <div class="row rowarchivo" style="left: 92px; top: 26px"><!--DIV row7-->
          <div class="col-2 columnarchiv">
            <p> Archivo: </p> 
          </div>
         <div class="col-3 inputarch">
            <input class="in" type="file" name="nomArchivo" id="files">
         </div>
         <div class="col-3 inputarch1">
         
              <label name="fechaArchivo" id="fecha">{{$fecha}} </label>
                               
         </div>
          <div class="col-1 inputarch2">
              <button type="button" class="btn btn-warning">Modificar Archivo</button> 
          </div>
        </div><!--FIN div row 12-->



        </form><!--FIN FORM GUARDA ARCHIVO-->

        <div class="row rowbotonesrep">
          <div class="col-4 colbotonesrep1">
            <input class="btn btn-warning " type="button" value="Editar Datos">
          </div>
          <div class="col-4 colbotonesrep2">
            <button data-toggle="modal" data-target="#guardaReportes" value="Enviar datos" class="btn btn-success ">Guardar Datos</button>
          </div>
          <div class="col-4 colbotonesrep3">
             <input class="btn btn-danger" type="submit" value="Cancelar" >
          </div>
        </div>
        <a href="\..\storage\app/public/201627/practica2.pdf">asd</a>
           
     
      </div>  <!--DIV Alumno-->   
  </form>
	</div>
</body>
</html>