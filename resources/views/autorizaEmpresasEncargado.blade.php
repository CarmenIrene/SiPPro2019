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
          <div class="col-3 colBienvenido"> Nombre:
          </div>
          <div class="col-5">
            <label>  {{$encargado->nombre}}</label>            
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
                  <a href="/encargadoSolicitudesPendientes/{{$encargado->rpe}}">Autorizaciones Pendientes de Solicitud</a>
              </li>
          </ul>
            <ul class="submenuRegistroTutor" >
              <li>
                    <a href="/encargadoReportesPendientes/{{$encargado->rpe}}">Autorizaciones Pendientes de Reportes</a>
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
    
         <!--DIV de los datos generales del alumno-->
    <div class="contenedorDatosAut"> <!--inicio del div contenedor de datos y de la foto-->
        <img src="/usuario.png">
      <div  class="DatosGenerales"> <!--DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
        <div class="row fila1">
          <div class="col-3 columna1"> Clave UASLP:
          </div>
          <div class="col-5">
              <label name="clave">{{$alumno->claveUnica}}</label>
          </div>
          
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
          <div class="col-3 columna1">Tutor Académico: </div>
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
                        
    </div>  <!--DIV Alumno-->
  
   <!------------------------------------------------------------------------------------>
   <!----------------------------------------------------------------------------------------------->
   <div class="EmpresaAut">
    <div class="tituloDatosEmpresaAut" >
        <p>Datos de la Empresa</p>
    </div>
    <!--DIV que contiene los datos que se le piden a la empresa-->
    <div class="EmpresaAutEncargado">
      <div class="row rowEmpresaNomAut"  ><!--DIV row1-->
        <div class="col-3 colum1 -sm">
          <p>Nombre : </p>
        </div>
        <div class="col-9 inputNombreEm -sm">
          <label class="label1">{{$solicitudempresa->Nombre}}</label>
        </div>   
      </div><!--DIV row1-->
      <div class="row rowTipoPract"><!--DIV row1-->
            <div class="col-3 colum1 -sm"  >
              <p>Dirección :</p>
            </div>
            <div class="col-9 -sm colTipoP" >
                <label>{{$solicitudempresa->Direccion}}</label>
            </div>       
          </div><!--DIV row1-->
         
          
          <div class="row rowActs"><!--DIV row4-->
            <div class="col-4 colum111 -sm">
              <p>Télefono:</p>
            </div>
            <div class="col-8 actividades -sm">
              <label class="label4">{{$solicitudempresa->Telefono}}</label>
            </div>
        </div><!--DIV row4--> 
    </div>  <!--DIV Empresa--> 
    </div>  
 <!-------------------Fin Datos Empresa---------------------------------------->
    </div>

  <!--fin del div contenedor de datos y de la foto-->
<!--Comentarios-->
    <div class="contenedorComentario2" >
      <p>Comentarios</p>
    </div>
    <form method="POST" action="/GuardaAcreditacionEncargado/{{$encargado->rpe}}/{{$alumno->claveUnica}}">
        @csrf
        <div class="comentario3">
          <div class="row rowComentario3" >
            <div class="col-3 columTel -sm" >
              <p>Fecha de autorización:</p>
            </div>
            <div class="col-9 inputTel -sm">
              <label name="fechaAutorizacion" id="fecha">{{$fechaAut}}</label>
            </div>     
          </div>
          <p class="parrafocomentarios"> Escriba aquí sus comentarios:</p>
          <input class="inputComentariosTutor" type="text" name="Comentarios" >
            <div class="Autoriza">
              <div class="form-group form-check">
                <input type="radio" class="form-check-input checkautoriza" name="radio" value="1">
                <label class="form-check-label checkautoriza">Autorizada</label>
              </div>
              <div class="form-group form-check">
                <input type="radio" class="form-check-input checkNoautoriza" name="radio" value="0">
                <label class="form-check-label checkNoautoriza">No Autorizada</label>
              </div>
              <input class="btn btn-success btnEnviarAut" type="submit" value="Enviar Datos">
              <input class="btn btn-danger btnEnviarAut" type="submit" value="Cancelar">
            </div>    
        </div>
    </form>
</body>
</html>