<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Index</title>
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
    <div style="height:170px;background-color: (198,217,241); padding: 0px"> <!--inicio del div contenedor de datos y de la foto-->
        <img src="/usuario.png" style="position: relative; left:100px; width: 15%">
      <div style="height: 200px; position: relative; left: 240px; bottom:140px;width: 66%; padding: 0px"> <!--DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
        <div class="row" style="height: 28.5px; background-color: rgb(198,217,241); font-family: Tahoma;font-size: 12px">
          <div class="col-3" style="background-color: rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white; text-align: left"> Clave UASLP:</div>
          <div class="col-5">
              <label name="clave">{{$alumno->claveUnica}}</label>
          </div>
          <div class="col-4" style="background-color: rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white">Fecha: {{$fecha}}</div>
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white">Clave Ingenier&iacutea:</div>
          <div class="col-5">
              <label>{{$alumno->claveIngenieria}}</label>
          </div>
          <div class="col-4"></div>
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white"> Nombre:
          </div>
          <div class="col-5">
              <label name="nombre">{{$alumno->Nombre}}</label>
          </div>
          <div class="col-4" style="background-color: (198,217,241); font-family: Tahoma;font-size: 15px; color: white"></div><!--aqui iba situaciÃ³n-->
        </div>

        <div class="row">
          <div class="col-3" style="background-color:rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white">Carrera: </div>
          <div class="col-5">
              <label name="carrera">{{$alumno->carrera}}</label>
          </div>
          <div class="col-4"></div>
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white">Asesor: </div>
          <div class="col-5">
              <label>{{$tutor->Nombre}}</label>
          </div>
          <div class="col-4" style="background-color: (198,217,241); font-family: Tahoma;font-size: 15px; color: white"></div><!--aqui iba condicion-->
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white">Ciclo Escolar: </div>
          <div class="col-5">
              <label>{{$alumno->cicloEscolar}}</label>
          </div>
          <div class="col-4"></div>
        </div>

        <div class="row">
          <div class="col-3" style="background-color: rgb(26,50,86); font-family: Tahoma;font-size: 15px; color: white; height: 30px">Semestre: </div>
          <div class="col-5">
              <label>{{$alumno->semestre}}</label>
          </div>
          <div class="col-4"></div>
        </div>
     </div> <!-- FIN DEL DIV QUE CONTIENE LOS DATOS GENERALES DEL ALUMNO-->
    </div>
  <!--fin del div contenedor de datos y de la foto-->

    <!---INICIO MENU--->
    <div class="menu" style="width: 78%">
      <ul><!--primer ul--->
        <li class="menuitem" >
          <a href="#" >Registro</a>
          <ul class="submenuRegistro" style="padding: 30px; background-color: rgb(36,50,86)">
              <li><a href="/llenarSolicitud/{{$alumno->claveUnica}}">Llenar Solicitud
              </a>
          </ul>
        </li>
        <li class="menuitem">
          <a href="#" style="padding-left: 0px; left: -50px; position: relative">Ayuda</a>
          <ul class="submenuRegistro">
                
          </ul>
        </li>
        <li class="menuitem" style="width: 40px;position: relative">
          <a href="/" style="padding-left: 0px; left: -110px; position: relative">Cerrar Sesión</a>
        </li>
      </ul><!--fin del primer ul--->
    </div>
    <!---FIN DIV MENU---> 

    <!--DIV PARA EL LLENADO DE LA SOLICITUD--> 
      <div class="titulo" style="width: 78%; position: relative; left: 122px">
        <p>SOLICITUD DE PR&AacuteCTICAS PROFESIONALES</p>
      </div><!--DIV titulo-->
      <div class="tituloDatosAlumno " style="width: 78%; position: relative; left: 122px;background-color:rgb(26,50,86) /*color azul marino*/">
        <p style="position: relative;right: 90px">Datos de Pr&aacutecticas Profesionales</p>
      </div>
<!--DIV que contiene los datos que se le piden al alumno-->
      <form method="POST" action="/GuardaDatosPracticas/{{$alumno->claveUnica}}" style="width: 78%; position: relative; left: 122px">
        @csrf
        <div class="Alumno" style="height: 340px">
          <div class="row" style="width: 78%; margin-left:30px;  height: 50px"><!--DIV row1-->
            <div class="col-2 colum1 -sm" style="margin-bottom: 20px;text-align: left;background-color:rgb(26,50,86); height: 43px" >
              <p>Tipo de Pr&aacutecticas :</p>
            </div>
            <div class="col-10 -sm" style="top:15px; left:20px">
             <select class="form-control" name="tipoPracticas" id="" style="background-color:rgb(26,50,86);color:white">
               <option value="">Selecciona una opci&oacuten</option>
               <option>Prácticas Profesionales I</option>
               <option>Prácticas Profesionales II</option>
               
              </select>
            </div>       
          </div><!--DIV row1-->
          <div class="row" style="width: 78%; margin-left:30px;  margin-bottom:20px;height: 30px"><!--DIV row2-->
            <div class="col-2 colum1 -sm" style="text-align: left;background-color:rgb(26,50,86)">
              <p>Horario :</p>
            </div>
            <div class="col-2 hora -sm" style="left:34px; top:20px; padding:0px; text-align: left">
             <p>Hora entrada:</p>
            </div>
            <div class="col-3 horainput -sm" style="left:20px">
              <input type="time" class="form-control input-sm" name="horaEntrada" required>
            </div>
            <div class="col-2 hora -sm" style="left:20px; top:20px; padding:0px; text-align: left">
              <p>Hora de salida:</p>
            </div>
            <div class="col-3 horainput -sm" style="left:3px">
              <input type="time" class="form-control input-sm" name="horaSalida" required>
            </div>       
          </div><!--DIV row2-->

          <div class="row" style="width: 78%; margin-left:30px; text-align: left;height: 30px"><!--DIV row3-->
            <div class="col-2 colum1 -sm" style="text-align: left;background-color:rgb(26,50,86)" >
              <p>Per&iacuteodo :</p>
            </div>
            <div class="col-2 fecha1 -sm" style="left:35px; padding:0px; text-align: left">
              <p>Fecha Inicio :</p>
            </div>
            <div class="col-3 fechainput1 -sm " style="left:35px; padding:0px">
              <input type="date" class="form-control input-sm" name="fechaInicio" required>
            </div>
            <div class="col-2 fecha2 -sm" style="left:45px; padding:0px; text-align: left ">
              <p>Fecha Fin :</p>
            </div>
            <div class="col-3 fechainput2 -sm" style="left:10px; padding:0px">
              <input type="date" class="form-control input-sm" name="fechaFin" required>
            </div>
          </div><!--DIV row3-->

          <div class="row" style="width: 78%; margin-left:30px; text-align: left;height: 30px; padding: 0px"><!--DIV row4-->
            <div class="col-3 colum11 -sm" style="height: 44px; left:20px; text-align: left; background-color:rgb(26,50,86)" >
              <p>Actividades que realizar&aacute:</p>
            </div>
            <div class="col-9 actividades -sm" style="top:30px">
              <textarea class="form-control" name="acts" rows="3"></textarea>
            </div>
          </div><!--DIV row4-->   
          <input class="btn btn-success botonEnviar" type="submit" value="Guardar Datos" style="margin-left: 350px; margin-top: 115px">                 
        </div>  <!--DIV Alumno-->
        
    </form>

<!----------------------------------------------------------------------------------------------->
   <!----------------------------------DATOS EMPRESA----------------------------------------------->
   <!----------------------------------------------------------------------------------------------->
    <form method="POST" action="/GuardaDatosEmpresa/{{$alumno->claveUnica}}" style="width: 78%; position: relative; left: 122px">
        @csrf
        <div class="tituloDatosEmpresa" style="background-color:rgb(26,50,86)">
          <p>Datos de la Empresa</p>
        </div>
          <!--DIV que contiene los datos que se le piden a la empresa-->
        <div class="Empresa" style="height: 500px">
          <p class="parrafoAltaEmpresa" style="font-size: 18px; padding: 10px; margin-bottom: 30px; text-align: justify">  
          <b>NOTA:</b>Si la empresa no se encuentra dentro de la lista del cat&aacutelogo, seleccione la opci&oacuten <em> Proponer Empresa </em>. Si la empresa si se encuentra con sus datos seleccione la opci&oacuten <em>Guardar Datos.</em></p>
          <div class="row"  style="width: 78%; margin-left:30px; top: 60px; margin-bottom: 10px"><!--DIV row1-->
            <div class="col-3 colum111 -sm" style="height: 50px; text-align: left; background-color:rgb(26,50,86)">
              <p>Nombre de la empresa: </p>
            </div>
            <div class="col-9 inputNombreEm -sm" style="top: 57px; padding: 0px; left:40px">
              <select class="form-control" name="idEmpresa">
                <option value="0">Seleccione una opci&oacuten</option>
                @foreach($empresa as $emp)
                   <option value="{{$emp->idEmpresa}}">{{$emp->Nombre}}</option>
                @endforeach
              </select>
            </div>   
          </div><!--DIV row1-->

<!--                 <option>399 PROJECT DEVELOPMENT S.A DE C.V</option>
                 <option>3M MÉXICO, S.A DE C.V</option>
                 <option>A Y C INTERNACIONAL, S.A DE C.V</option>
                 <option>A. SCHULMAN DE MÉXICO, S.A DE C.V</option>
                 <option>A.L CONSTRUCCIONES METÁLICAS, S.A DE C.V</option>
                 <option>ABB MÉXICO, S.A DE C.V</option>
                 <option>ABINSA, S.A DE C.V</option>
                 <option>ACABADOS TEXITRAM, S.A DE C.V</option>
                 <option>ACEROS TANGAMANGA, S.A DE C.V</option>
                 <option>ACTUALCOLOR TEXTIL, S.A DE C.V</option>
                 <option>ADMINISTRACIÓN EN PREVENCIÓN DE RIESGOS INDUSTRIALES</option>
                 <option>AERO TECHNOLOGIES DE MÉXICO S.A DE C.V</option>
                 <option>AFICEN, S.A DE C.V</option>
                 <option>AFIN GANA,S.A DE C.V SOFOM ENR</option>
                 <option>AISLANTES MINERALES,S.A DE C.V</option>
                 <option>ALFARO POYOU Y MEDINA, A.C</option>
                 <option>ALFREDO ANAYA CAMACHO</option>
                 <option>ALIMENTOS LA CONCORDIA, S.A DE C.V</option>
                 <option>ALQUILADORA DE VEHICULOS AUTOMOTORES, S.A DE C.V</option>
                 <option>ALUPRINT, S. DE R.L DE C.V</option>
                 <option>ANÁLISIS AMBIENTALES DE POTOSÍ, S.A DE C.V</option>
                 <option>ANTIADHERENTE, S.A DE C.V</option>
                 <option>ARCO METAL, S.A DE C.V</option>
                 <option>ARENAS GALLEGOS Y CIA, S.C</option>
                 <option>ARGOS PIZARRONES SURESTE, S.A DE C.V</option>
                 <option>ARMANDO VILLASUSO COURTADE</option>
                 <option>AROMÁTICOS LA VICTORIA, S.A DE C.V</option>
                 <option>ARTÍCULOS DE LÁMINA, S.A DE C.V</option>
                 <option>ASC/ADMINISTRACIÓN Y SERVICIOS COMPUTACIONALES</option>
                 <option>ASESORÍA ESTRATÉGICA EN SOLUCIONES HUMANAS, S.A DE C.V</option>
                 <option>ASESORÍA INTEGRAL PARA EL DESARROLLO DE LA EMPRESA</option>
                 <option>ASISTENCIA AMBIENTAL, S.A DE C.V</option>
                 <option>ASOCIACIÓN DE PROFESIONALES EN LA DOCENCIA</option>
                 <option>ATAYAX, S.A DE C.V</option>
                 <option>AUDIO ONE,S.A DE C.V</option>
                 <option>AURORA PÉREZ GUZMÁN / HULES INDUSTRIALES </option>
                 <option>AUTOMOTRIZ LOMAS SAN LUIS, S.A. DE C.V.</option>
                 <option>AXTEL, S.A. DE C.V. </option>
                 <option>AZPOTOSINA PLASTIC, S.A. DE C.V. </option>
                 <option>BALNEARIO Y MANANTIALES DE LOURDES, S.A. DE C.V</option>
                 <option>BARILLA MÉXICO, S.A. DE C.V.  </option>
                 <option>BATZ MEXICANA, S.A. DE C.V. </option>
                 <option>BEATRIZ DEL CARMEN SÁNCHEZ HERNÁNDEZ </option>
                 <option>BEBIDAS Y REFRESCOS POTOSINOS, S.A. DE C.V.  </option>
                 <option>BENEFIS SAN LUIS, A.C </option>
                 <option>BERNARDO REYNOSO FRANCO  </option>
                 <option>BICICLO, S.A. DE C.V.  </option>
                 <option>BIZERBA SLICERS MÉXICO, S.A. DE C.V.  </option>
                 <option>BLOKE CON BLOKE, S.A. DE C.V. </option>
                 <option>BOLSAS BEMIS, S.A. DE C.V. </option>
                 <option>BOMBAS GRUNDFOS DE MÉXICO MANUFACTURING, S.A.</option>
                 <option>BONLAM, S.A. DE C.V.  </option>
                 <option>BRAVO MONTACARGAS S.L.P., S.A. DE C.V. </option>
                 <option>CADENA AUTOMOTRIZ, S.A. DE C.V.  </option>
                 <option>CAFT GLOBAL SERVICES DE MÉXICO, S.A. DE C.V. </option>
                 <option>CAJAS MIL USOS, S.A. DE C.V.  </option>
                 <option>CAJAS Y EMPAQUES DEL POTOSÍ </option>
                 <option>CAL QUÍMICA MEXICANA, S.A. DE C.V. </option>
                 <option>CAMBIO ORGANIZACIONAL, S.C. </option>
                 <option>CANEL S  </option>
                 <option>CAPITAL INDEPENDIENTE EMPRESARIAL Y COMERCIAL</option>
                 <option>CARLOS EDUARDO CORNEJO LARA  </option>
                 <option>CARLOS GAMA DUFOUR  </option>
                 <option>CARLOS ROMERO MENDOZA  </option>
                 <option>CARNES SELECTAS TANGAMANGA, S.A. DE C.V.   </option>
                 <option>CASA CABRERA SUCESORES, S.A. DE C.V. </option>
                 <option>CENTRO DE INNOVACIÓN y CAPACITACIÓN FISCAL, S</option>
                 <option>CENTRO INTEGRAL DE IDIOMAS, S.A. DE C.V. </option>
                 <option>CENTRO UNIVERSITARIO DE APOYO TECNOLOGICO Y EMPRESARIAL (CUATE)</option>
                 <option>CENTROS EDUCATIVOS POTOSINOS, A.C.  </option>
                 <option>CERAPIL DE SAN LUIS, S. DE R.L.  </option>
                 <option>CERCATEX, S.A. DE C.V.  </option>
                 <option>CHILES SECOS Y CEREALES, S.A. DE C.V.  </option>
                 <option>CHOCOLATES POTOSINOS, S.A. DE C.V.  </option>
                 <option>CIA. DE MUEBLES LA AZTECA, S.A. DE C.V. </option>
                 <option>CIATEQ, A.C.  </option>
                 <option>CLAIRE DENISE MARIE JOLY DESMOURS  </option>
                 <option>CLAUDIA ELENA GARZA MONTEMAYOR  </option>
                 <option>CLÍNICA DE RESONANCIA MAGNÉTICA, S.A. DE C.V.</option>
                 <option>COLEGIO DE ESTUDIOS CIENTÍFICOS Y TECNOLÓGICO</option>
                 <option>COMAL COMPLEMENTOS ALIMENTICIOS, S.A. DE C.V.</option>
                 <option>COMERCIAL EMAGRI, S.A. DE C.V.  </option>
                 <option>COMERCIALlZADORA DEL CENTRO BONANZA, S.A. DE C.V</option>
                 <option>COMERCIALIZADORA INTEGRAL DE MINERALES, S.A. DE C.V </option>
                 <option>COMERCIALIZADORA POTOSINA DE PINTURAS, S.A. DE C.V</option>
                 <option>CONCEPT HOUSE, S.A. DE C.V. </option>
                 <option>CONDIMENTOS DE MÉXICO, S.A. DE C.V.  </option>
                 <option>CONEXIONES Y MANGUERAS ABASTOS, S.A. DE C.V. </option>
                 <option>CONSORCIO REMA, S.A. DE C.V.  </option>
                 <option>CONSTRUCCIONES INDUSTRIALES ARGO, S.A. DE C.V</option>
                 <option>CONSTRUCTORA METROPOLITANA URBI, S.A. DE C.V.</option>
                 <option>CONTITECH MEXICANA, S.A. DE C.V  </option>
                 <option>CONTRASTE DE PIXEL, S.A. DE C.V.  </option>
                 <option>CONTROLADORA JAMA, S.C.  </option>
                 <option>CONVERTIDORA ECO DEL CENTRO, S.A. DE C.V.    </option>
                 <option>CORAL INTERNACIONAL, S.A. DE C.V. </option>
                 <option>CORPORATIVO ACCEPTRIX, S.A. DE C.V. </option>
                 <option>CORPORATIVO PCSL, S.A. DE C.V. </option>
                 <option>CORTINAS DE SEGURIDAD ALBA, S.A. DE C.V.  </option>
                 <option>COYOACAN QUÍMICA, S.A. DE C.V.  </option>
                 <option>CUMMINS FILTRACIÓN, S. DE R.L. DE C.V.  </option>
                 <option>CUMMINS, S. DE R.L. DE C.V.  </option>
                 <option>CURTS GLOBAL TRADING, S.A. DE C.V.  </option>
                 <option>DC SAN LUIS, S.A. DE C.V. </option>
                 <option>DESARROLLADORA PARQUE LOGÍSTICO S. DE R.L. DE</option>
                 <option>DESARROLLO LOGISTIK, S.A. DE C.V. </option>
                 <option>DESARROLLOS HABITACIONALES ARENA, S.A. DE C.V</option>
                 <option>DETERSOL, S.A. DE C.V. </option>
                 <option>DEXTERITY, S.A. DE C.V.  </option>
                 <option>DIVERMETAL, S.A. DE C.V.  </option>
                 <option>DIXPERTIA INVESTIGACIÓN BIOFARMACÉUTICA Y FARMACOLÓGICA S.C</option>
                 <option>DRÄXLMAIER Group DCM Draexlmaier Components Automotive de México S. de R.L. de C.V. </option>
                 <option>DRAISINE, S.A. DE C.V. </option>
                 <option>DUGOVI, S.A. DE C.V.  </option>
                 <option>EATON TRUCK COMPONENTS, S. DE R.L. DE C.V.   </option>
                 <option>ECOLÓGICA GRUPO PROMOTOR, S.A. DE C.V. </option>
                 <option>EJOTATF FASTENERS DE MÉXICO Y COMPAÑÍA, S. EN C</option>
                 <option>EL CAMPEÓN MADERERO, S.A. DE C.V. </option>
                 <option>ELSTER AMCO DE MÉXICO, S. DE R.L. DE C.V.  </option>
                 <option>EMBOTELLADORA SAN LUIS, S.A. DE C.V.  </option>
                 <option>EMD LOCOMOTIVE COMPANY DE MÉXICO, S.A. DE C.V</option>
                 <option>EMPAQUES INDUSTRIALES DEL POTOSÍ, S.A. DE C.V</option>
                 <option>EMPORIUM CLOTHING INC.  </option>
                 <option>ENERGÍA SOLAR INTEGRAL, S.A. DE C.V.  </option>
                 <option>ENSEÑANZA E INVESTIGACIÓN SUPERIOR, A.C.TEC MILEIO</option>
                 <option>ENVASADORA Y DISTRIBUIDORA LA PERLA, S.A. DE </option>
                 <option>ENVASES DEL PLATA, S.A. DE C.V. </option>
                 <option>ENVASES PLÁSTICOS DEL CENTRO, S.A. DE C.V.  </option>
                 <option>EPTEC, S.A. DE C.V.  </option>
                 <option>EPTEC, S.A. DE C.V.  </option>
                 <option>EQUIPOS E INSUMOS PARA LA INDUSTRIA ALIMENTICIA</option>
                 <option>ESPARTEC, S.A. DE C.V.  </option>
                 <option>ESPECIALISTAS AÉREOS DE SAN LUIS POTOSÍ, S.A.</option>
                 <option>ESTRUCTURAS METÁLICAS PREFABRICADAS, S.A. DE </option>
                 <option>ESTRUCTURAS Y POSTES ELÉCTRICOS, S.A. DE C.V.</option>
                 <option>ETICOM DEL CENTRO, S. DE R.L. DE C.V.  </option>
                 <option>FÁBRICA CORONADO, S.A. DE C.V.  </option>
                 <option>FÁBRICA DE CHOCOLATE LA FRONTERA, S.A. DE C.V</option>
                 <option>FÁBRICA DE CHOCOLATES Y DULCES COSTANZO, S.A.</option>
                 <option>FABRICANTE DE INSUMOS DE SAN LUIS, S.A. DE C.</option>
                 <option>FAGOR INDUSTRIAL MÉXICO, S.A. DE C.V.  </option>
                 <option>FAURECIA SISTEMAS AUTOMOTRICES  </option>
                 <option>FEVISA INDUSTRIAL, S.A. DE C.V.   </option>
                 <option>FLEXOGRÁFICO, S.A. DE C.V. </option>
                 <option>FLEXOPIPE, S.A. DE C.V. </option>
                 <option>FUNERALES HERNÁNDEZ, S.A. DE C.V. </option>
                 <option>GAMBUSINO VIAJES, S.A. DE C.V.  </option>
                 <option>GASES INDUSTRIALES SERVICIOS Y ABASTECIMIENTO</option>
                 <option>GEA POWER COOLlNG DE MÉXICO, S. DE R.L. DE C.</option>
                 <option>GEMTRON DE MÉXICO, S.A. DE C.V.  </option>
                 <option>GEN INDUSTRIAL, S.A. DE C.V./CH DESPERDICIOS </option>
                 <option>GIFFIN INDUSTRIES, S. DE R.L. C.V. </option>
                 <option>GIGATEC, S.A. DE C.V.  </option>
                 <option>GLOMAR PASTELEROS, S. DE. R.L. DE C.V.  </option>
                 <option>GLORIA MARÍA CASTRO LIMÓN  </option>
                 <option>GOCESA CONSTRUCCIONES, S.A. DE C.V.  </option>
                 <option>GP SERVICIOS INDUSTRIALES, S.A. DE C.V </option>
                 <option>GRÚAS SAN LUIS, S.A. DE C.V.  </option>
                 <option>GRUPO ACERERO, S.A. DE C.V.  </option>
                 <option>GRUPO ADUANAL GALVÁN, S.C.  </option>
                 <option>GRUPO ARYMI ,S. DE R.L. DE C.V.  </option>
                 <option>GRUPO AUTOMOTRIZ ROSVEL, S.A. DE C.V.  </option>
                 <option>GRUPO CONSTRUCTOR AAMA, S.A. DE C.V.  </option>
                 <option>GRUPO CONSULTOR PARA LA MICROEMPRESA, S.A. DE C.V</option>
                 <option>GRUPO CÚPULA, S.A. DE C.V.  </option>
                 <option>GRUPO DELVEG, S.A. DE C.V.  </option>
                 <option>GRUPO DICADI, S.A. DE C.V.  </option>
                 <option>GRUPO GLAUCUS, S.A. DE C.V.  </option>
                 <option>GRUPO HIPESA, S.A. DE C.V.  </option>
                 <option>GRUPO INDUSTRIAL C y F, S.A. DE C.V.  </option>
                 <option>GRUPO LEONSER, S.A. DE C.V.  </option>
                 <option>GRUPO RESTAURANTES CON ARTE  </option>
                 <option>GRUPO SEÑAL PUBLICIDAD, S.A. DE C.V.  </option>
                 <option>GRUPO TORRES CORZO AUTOMOTRÍZ DE SAN LUIS Y Z</option>
                 <option>GRUPO TRES NACIONES, S.A, DE C.V.  </option>
                 <option>GUILLERMO ALVARADO JIMÉNEZ</option>
                 <option>GUILLERMO GUERRERO LÓPEZ  </option>
                 <option>GUILLERMO RUÍZ CRAVIOTO  </option>
                 <option>HABILITACIONES CALIFICADAS TÉCNICAMENTE, S.A.</option>
                 <option>HARINERA TEPEYAC, S.A. DE C.V.  </option>
                 <option>HERDEZ, S.A. DE C.V.  </option>
                 <option>HERNÁNDEZ AGUILAR MARCO ANTONIO/ AON RISK SER</option>
                 <option>HERRAJES MECANISADOS, S. DE R.L. </option>
                 <option>HIELO T POTOSINO, S.A. DE C.V. </option>
                 <option>HITCHINER MANUFACTURING COMPANY DE MÉXICO, S.A DE C.V</option>
                 <option>HOTELES Y SERVICIOS INTERNACIONALES SLP, S.A. DE C.V</option>
                 <option>HUGO GUTIÉRREZ LEDESMA  </option>
                 <option>HUMBERTO MORONES CABRERA / ROSA MEXICANO  </option>
                 <option>HYDRAULIC AND NEUMATIC ORIGINAL PARTS, S. DE </option>
                 <option>IACP JEVSAMEX, S. DE R.L. DE C.V.  option>
                 <option>IMPRESIONES Y CAJAS DE SAN LUIS, S.A. DE C.V.</option>
                 <option>IMPULSORA DE ALTURA, S.A. DE C.V.  </option>
                 <option>IMPULSORA DEMA DE SAN LUIS, S.A. DE C.V. </option>
                 <option>INDUSTRIA VIDRIERA DEL POTOSÍ, S.A. DE C.V. </option>
                 <option>INDUSTRIAL BLAJU, S.A. DE C.V.  </option>
                 <option>INDUSTRIAL METÁLICA DEL ALTIPLANO, S.A. DE C.V</option>
                 <option>INDUSTRIAL PAPELERA SAN LUIS, S.A. DE C.V.  </option>
                 <option>INDUSTRIALIZADORA DE CAFÉ, S.A. DE C.V.  </option>
                 <option>INDUSTRIAS NEGORO, S.A. DE C.V. </option>
                 <option>INDUSTRIAS QUÍMICAS JALIHAB, S.A. DE C.V. </option>
                 <option>INDUSTRIAS SELBOR, S.A. DE C.V.  </option>
                 <option>INGENIERÍA CLÍNICA HOSPITALARIA, S. DE R.L. D</option>
                 <option>INGENIERÍA EN MAQUINADOS DEL CENTRO, S.A. DE C.V</option>
                 <option>INGENIERÍA INDUSTRIAL POTOSINA, S.A. DE C.V. </option>
                 <option>INMOBILIARIA DE MEXQUITIC, S.A. DE C.V. / PAR</option>
                 <option>INNOVATION PACKAGING & PROCESS, S.A. DE C.V. </option>
                 <option>INOXIDABLES DE SAN LUIS, S.A. DE C.V.  </option>
                 <option>INSTITUTO CARLOS GOMEZ, A.C.  </option>
                 <option>INSTITUTO MEXICANO DEL AGUA POTABLE, A.C.  </option>
                 <option>INSTITUTO TECNOLÓGICO SUPERIOR DE SAN LUIS POTOSÍ<option>
                 <option>INSTRUMENTOS MÉDICOS DEL CENTRO, S.A. DE C.V.</option>
                 <option>INTEGRADORA DE EMPAQUES Y EMBALAJES, S. DE R.</option>
                 <option>INTER PRICE LOGÍSTICA, S.A. DE C.V.  </option>
                 <option>INTERNATIONAL PRINTING SERVICES DE MÉXICO SOL</option>
                 <option>INTERRUPTORES DE MÉXICO, S.A. DE C.V. </option>
                 <option>INVERGISA SEGURIDAD PRIVADA, S.A. DE C.V.  </option>
                 <option>INVERSINOX, S.A. DE C.V.  </option>
                 <option>IQUEO, S.A. DE C.V.  </option>
                 <option>ISAAC RUÍZ LÓPEZ  </option>
                 <option>ISW INDUSTRIAL SOLUTIONS & WAREHOUSING, S. DE</option>
                 <option>JARDINES PERPETUOS, S.A. DE C.V.   </option>
                 <option>JET FACT, S.A. DE C.V. </option>
                 <option>JOE S DISTRIBUIDORA, S.A. DE C.V.    </option>
                 <option>JOMART SERVICIOS, S.A. DE C.V. </option>
                 <option>JOSÉ ANTONIO BARRAL PONTONES  </option>
                 <option>JOSÉ ANGEL BUENO MORALES </option>
                 <option>JOSE ARMANDO MACEDO GARCÍA / COSETA  </option>
                 <option>JOSE DE JESUS LÓPEZ FUENTES / CELORIO MÁQUINA</option>
                 <option>JOSÉ JAVIER EUSTACIO ALVARADO MITRE  </option>
                 <option>JOSÉ LEOPOLODO QUINTANAR OBREGÓN / LIL-DREAME</option>
                 <option>JOVITA RIVERA BRAVO </option>
                 <option>JUAN ARTURO HERNÁNDEZ DOMÍNGUEZ </option>
                 <option>JUAN CARLOS ZACARÍAS CHAPA </option>
                 <option>JUAN RUIZ PALOMO / STAND  </option>
                 <option>JUAN SEBASTIáN TORRE CAMPBELL </option>
                 <option>KIMPEN, S.A. DE C.V.  </option>
                 <option>KITCHEN EQUIPMENT DE SAN LUIS, S.A. DE C.V.  </option>
                 <option>LABORATORIOS HOMEOPÁTICOS GLISER, S.A. DE C.V</option>
                 <option>LACTEOS INDUSTRIALIZADOS Y POSTRES DEL POTOSÍ</option>
                 <option>LACTEOS Y HELADOS SAN MIGUEL, S.A. DE C.V. </option>
                 <option>LASER SAN LUIS, S.A. DE C.V.  </option>
                 <option>LASERGRAFIC, S.A. DE C.V.  </option>
                 <option>LB PALLETS & CRATES DEL POTOSÍ, S. DE R.L. DE</option>
                 <option>LEGGETT & PLATT SERVICIOS EJECUTIVOS, S.A. DE C.V</option>
                 <option>LEISER, S. DE R.L. DE C.V. / MABE  </option>
                 <option>LION TUBE, S. DE R.L. DE C.V.  </option>
                 <option>LOCOMOTIVE GROUP, S.A. DE C.V.  </option>
                 <option>LUIS MANUEL MENDOZA TORRES  </option>
                 <option>LUIS VELA HERNÁNDEZ  </option>
                 <option>LUMI AUTOMOTRIZ, S.A. DE C.V.  </option>
                 <option>MA. DE LA LUZ MORALES MÉNDEZ  </option>
                 <option>MADERAS y TARIMAS LA ESPERANZA, S.A. DE C.V. </option>
                 <option>MANTENIMIENTO DE TRATAMIENTOS TÉRMICOS, S.A. </option>
                 <option>MANTENIMIENTO INDUSTRIAL y CONSTRUCCIÓN POTOS</option>
                 <option>MANTENIMIENTO INDUSTRIAL Y MECÁNICA, S.A. DE C.V</option>
                 <option>MANUFACTURAS CABRERA, S.A. DE C.V. </option>
                 <option>MANUFACTURAS CODELA / ALEJANDRO TORRE GARZA  </option>
                 <option>MANUFACTURAS ROJILO, S. DE R.L. DE C.V.  </option>
                 <option>MANUFACTURAS SONOCO, S.A. DE C.V.  </option>
                 <option>MANUFACTURAS VITROMEX, S.A. DE C.V.  </option>
                 <option>MAQUINADOS GON-VEN, S.A. DE C.V.  </option>
                 <option>MÁQUINAS Y SERVICIOS AUTOMATICOS, S.A. DE C.V</option>
                 <option>MARÍA DEL ROSARIO GARÍIA ESPINOSA / FRENOS Y </option>
                 <option>MARTEX POTOSÍ, S.A. DE C.V. </option>
                 <option>MARTHA ROJAS GUERRERO / VISiÓN ÓPTIMA </option>
                 <option>MARTINA CAMACHO CAMPOS </option>
                 <option>MARTINEZ LOREDO Y ZAPATA, S.C.  </option>
                 <option>MASE ENERGY, S.A. DE C.V.  </option>
                 <option>MATHIESEN MÉXICO, S.A. DE C.V.  </option>
                 <option>MAXION FUMAGALLI DE MÉXICO, S. DE R.L. DE C.V</option>
                 <option>MCM AMERICAS, S.A. DE C.V. </option>
                 <option>MEADWESTVACO DE MÉXICO, S.A. DE C.V. </option>
                 <option>MECÁNICA GÓMEZ, S.A. DE C.V.  </option>
                 <option>MEJORA DESARROLLO LABORAL, A.C.  </option>
                 <option>MERKLE KORFF INDUSTRIES DE MÉXICO, S.A. DE C.V</option>
                 <option>MESAS VIGAR, S.A. DE C.V.  </option>
                 <option>METAL MANUFACTURING INDUSTRIES, S.A. DE C.V. </option>
                 <option>METAL MIN PROCESS, S.A. DE C.V.  </option>
                 <option>MEXICHEM FLUOR, S.A. DE C.V.  </option>
                 <option>MFSEIN, S.A. DE C.V.  </option>
                 <option>MI MÉXICO QUERIDO, S.A. DE C.V.  </option>
                 <option>MIGUEL ÁNGEL RUIZ ACOSTA  </option>
                 <option>MIGUEL MENDOZA AGUIRRE  </option>
                 <option>MILLS PRODUCTS DE MÉXICO, S.A. DE C.V.  option>
                 <option>MINEXPLOT, S. DE R.L. DE C.V.  </option>
                 <option>MIRAITANI, S.A. DE C.V.  </option>
                 <option>MODULARES LUMA, S.A. DE C.V.  </option>
                 <option>MORAN Y CIA., S.C._ <option>
                 <option>MOSAICOS DE DISEÑO F. ARTURO STEVENS    </option>
                 <option>MRJ FUNDIDORA, S.A. DE C.V. </option>
                 <option>MUEBLEPORT DE SAN LUIS, S.A. DE C.V. </option>
                 <option>MUEBLES EGGA, S.A. DE C.V. </option>
                 <option>MUEBLES INDUSTRIALIZADOS, S.A. DE C.V.   </option>
                 <option>MUEBLES MEIZA INTERNACIONAL, S.A. DE C.V. </option>
                 <option>MUEBLES PROVEL, S.A. DE C.V. </option>
                 <option>MV ASESORES DE NEGOCIOS </option>
                 <option>N.S. COMPASS, S.A. DE C.V.  </option>
                 <option>NETSMART MERCADEO, S.A. DE C.V.    </option>
                 <option>NEWLOG SOLUCIONES EN LOGÍSTICA, S.C. </option>
                 <option>NIHAM DE MÉXICO, S.A. DE C.V. </option>
                 <option>NITROPISO, S.A. DE C.V. </option>
                 <option>NOBEL AUTOMATIVE MÉXICO, S. DE R.L. DE C.V. </option>
                 <option>NOE JULIANOVA ITURRALDE ECHEVERRÍA </option>
                 <option>NR TEC DESARROLLOS TECNOLÓGICOS, S.A. DE C.V.</option>
                 <option>OLEFINAS S.L.P., S.A. DE C.V.  </option>
                 <option>OMAR SALAZAR ESTRADA / COCINAS RIDOLFI   </option>
                 <option>OMEGA SOLDER, S.A. DE C.V. </option>
                 <option>OROZCO, DELGADILLO Y ASOCIADOS, S.C.  </option>
                 <option>OSCARÍN ORTIZ HERNANDEZ  </option>
                 <option>PACCAR PARTS MÉXICO, S.A. DE C.V.  </option>
                 <option>PAILERÍA Y ESTRUCTURAS D,TORRES, S.A. DE C.V.</option>
                 <option>PAILERÍA DE SAN LUIS POTOSÍ, S.A. DE C.V.    </option>
                 <option>PALSGAARD INDUSTRI DE MÉXICO, S. DE R.L. DE C</option>
                 <option>PANADERÍA LA SUPERIOR, S.A. DE C.V. </option>
                 <option>PAPELERA INDUSTRIAL POTOSINA, S.A. DE C.V.   </option>
                 <option>PAPERLESS DE SAN LUIS, S.A. DE C.V. </option>
                 <option>PARQUE INDUSTRIAL MILENIUM, S. DE R. L. DE C.V</option>
                 <option>PATRICIA ESPERANZA GUADALUPE DE LA TORRE NAVA<option>
                 <option>PELETERÍA MEXICANA, S.A. DE C.V. </option>
                 <option>PETROQUÍMICA DE ACEITES, S.A. DE C.V.  <option>
                 <option>PINTURAS SENSACOLOR, S.A. DE C.V.  </option>
                 <option>PLACA Y FIERRO, S.A. DE C.V.  </option>
                 <option>POCHTECA MATERIAS PRIMAS, S.A. DE C.V.   </option>
                 <option>POLICONDUCTOS, S.A. DE C.V. </option>
                 <option>PORTINOX MÉXICO, S.A. DE C.V.   </option>
                 <option>POTOQUÍMICA, S.A. DE C.V. </option>
                 <option>PREFABRICADOS Y CONSTRUCCIONES DE SAN LUIS, S.A DE C.V</option>
                 <option>PRODAMEX, S.A. DE C.V. </option>
                 <option>PRODUCTOS ALIMENTICIOS TORRES, S.A. DE C.V.  </option>
                 <option>PRODUCTOS CARRANCO, S.A. DE C.V. </option>
                 <option>PRODUCTOS DON TACHO, S.A. DE C.V. </option>
                 <option>PRODUCTOS ESPECIALES SALUDABLES, S.A. DE C.V.</option>
                 <option>PRODUCTOS ESPECIALIZADOS DE ACERO, S.A. DE C.V</option>
                 <option>PRODUCTOS JACHE, S.A. DE C.V.  </option>
                 <option>PRODUCTOS LÁCTEOS DE CALIDAD, S. DE R.L. DE C.V</option>
                 <option>PRODUCTOS PECUARIOS ESPECIALIZADOS, S.A. DE C<option>
                 <option>PRODUCTOS V Y L, S.A. DE C.V. </option>
                 <option>PRODUCTOS Y SERVICIOS DEL CENTRO, S.A. DE C.V</option>
                 <option>PRODUQUÍMICOS INDUSTRIALES, S. DE R.L. DE C.V</option>
                 <option>PROINLUB MÉXICO, S.A. DE C.V. </option>
                 <option>PROVEEDORA DE CANCELES Y VENTANAS, S.A. DE C.V</option>
                 <option>PROVISISA, S.A DE C.V. </option>
                 <option>PROYECTOS TECNOLÓGICOS DE VANGUARDIA, S. DE R.L</option>
                 <option>PROYECTOS Y CALDERERÍA, S.A. DE C.V. </option>
                 <option>PROYECTOS, OBRAS Y SUMINISTROS VISICO, SA DE C.V</option>
                 <option>PSMP DE MÉXICO, S.A. DE C.V. </option>
                 <option>PURIFICADORA BRISA, S.A. DE C.V.  </option>
                 <option>QUAD TREE, S.A. DE C.V.   </option>
                 <option>QUALIPLAST, S.A.,DE C.V. </option>
                 <option>QUILLA INGENIERÍA EN COMUNICACIONES, S.A. DE </option>
                 <option>QUÍMICA EDJA, S.A. DE C.V.  </option>
                 <option>QUÍMICA PROCOM, S. DE R. L. DE C.V.  </option>
                 <option>RAM, S.A. DE C.V.  </option>
                 <option>RAMPE, S.A. DE C.V.  </option>
                 <option>RAUL ALEJANDRO JAIME MARTÍNEZ  </option>
                 <option>RAÚL ARMANDO GÓMEZ ALBA </option>
                 <option>RAYPP, S.A. DE C.V.  </option>
                 <option>RECOLECTOR, S.A. DE C.V.   </option>
                 <option>RECUBRIMIENTOS ELECTROLÍTICOS INDUSTRIALES, S.A DE C.V</option>
                 <option>REDUCTORES Y ARTÍCULOS PARA LA INDUSTRIA, S.A DE C.V</option>
                 <option>REMY COMPONENTES, S.DE R.L. DE C.V. </option>
                 <option>REMY REMANUFACTURING DE MÉXICO, S. DE R.L. </option>
                 <option>RICARDO MIGUEL TORRES RAMÍREZ  </option>
                 <option>RIO INDUSTRIAS, S.A. DE C.V.  </option>
                 <option>RITA GUADALUPE PÉREZ RAMÍREZ  </option>
                 <option>ROALCOM NEGOCIOS, S.A. DE C.V.  </option>
                 <option>ROBERT BOSCH MÉXICO SISTEMAS AUTOMOTRICES, S.A DE C.V</option>
                 <option>ROBERTO FAUSTINO SILVA SAUCEDO </option>
                 <option>ROCIO ALEMÁN  </option>
                 <option>RODRIGO OVIEDO OVIEDO  </option>
                 <option>ROMA SEGURA HERNÁNDEZ  </option>
                 <option>RYDER SERVICIOS, S. DE R.L. DE C.V.  </option>
                 <option>SABIC INNOVATIVE PLASTICS SERVICIOS MÉXICO, S</option>
                 <option>SAINT GOBAIN GYPSUM, S.A. DE C.V. </option>
                 <option>SALAS PRINCESS, S.A. DE C.V.  </option>
                 <option>SAN FRANCISCO JAVIER PARAFINAS, S.A.  </option>
                 <option>SAN LUIS 400, S.A. DE C.V. / AMERICAN EXPRESS</option>
                 <option>SCHWEITZER ENGINEERING LABORATORIES, S.A. DE C.V</option>
                 <option>SEGUROS EL POTOSÍ, S.A.  </option>
                 <option>SERVICIO CENTRAL POTOSINO, S.A. DE C.V.   <option>
                 <option>SERVICIOS META, S.A. DE C.V. </option>
                 <option>SERVICIOS Y SOLUCIONES PARA LA INDUSTRIA, S.A DE C.V</option>
                 <option>SIDERÚRGICA DE SAN LUIS, S.A. DE C.V.  </option>
                 <option>SISALERA POTOSINA, S.A. DE C.V.  </option>
                 <option>SISTEMA DE COMPRAS, S.A. DE C.V. </option>
                 <option>SOCIEDAD DE BENEFICENCIA ESPAÑOLA, A.C.  </option>
                 <option>SOLUCIONES EN ERGONOMIÍA Y SALUD INDUSTRIAL </option>
                 <option>SOLUCIONES ESTRATÉGICAS ORGANIZACIONALES, S.C</option>
                 <option>STACK CONSULTORÍA, S.A. DE C.V.  </option>
                 <option>SUACERO, S.A. DE C.V. </option>
                 <option>SUMINISTROS INDUSTRIALES POTOSINOS, S.A. DE C.V</option>
                 <option>SURVALENT TECHNOLOGY CORPORATION MÉXICO, S.A. DE C.V</option>
                 <option>SYNGENTA AGRO, S.A. DE C.V. </option>
                 <option>TABIQUES INTEGRADOS DE CONCRETO, S.A. DE C.V.</option>
                 <option>TACENTRO, S.A. DE C.V. </option>
                 <option>TALENTOS NATURALES, S.A. DE C.V.  </option>
                 <option>TALLERES INDUSTRIALES POTOSINOS, S.A. DE C.V.</option>
                 <option>TALLERES RENMEN, S.A. DE C.V. </option>
                 <option>TALLERES Y SERVICIOS PESADOS, S.A. DE C.V.   </option>
                 <option>TAMARINDOS Y CARAMELOS, S.A. DE C.V. </option>
                 <option>TANGIBLE NOUS, S.A. DE C.V.  </option>
                 <option>TBC DE ÉEXICO, S.A. DE C.V.  </option>
                 <option>TÉCNICOS Y ASESORÍA INDUSTRIAL, S.A. DE C.V. </option>
                 <option>TECNOLOGÍA ESPECIALIZADA EN EL MEDIO AMBIENTE<option>
                 <option>TECNOSOPORTE INDUSTRIAL Y COMERCIALIZACIÓN, S.A DE C.V</option>
                 <option>TEKA MEXICANA, S.A. DE C.V. </option>
                 <option>TEXTAPE DEL NORTE, S.A. DE C.V.  </option>
                 <option>THYSSENKRUPP MEXINOX, S.A. DE C.V.  </option>
                 <option>TI GROUP AUTOMOTIVE SYSTEMS, S. DE R.L. DE C.V</option>
                 <option>TIBCHEMCORP MEXICANA, S.A. DE C.V. </option>
                 <option>TIGHITCO LATINOAMERICANA, S.A. DE C.V.  </option>
                 <option>TIOQUIM DISTRIBUIDORA, S.A. DE C.V.  </option>
                 <option>TISAMATIC OPERACIONES, S. DE R.L. DE C.V.  </option>
                 <option>EATON TRUCK COMPONENTS</option>
                 <option>TORTAURANTES ROD, S.A. DE C.V.  </option>
                 <option>TOTAL CABINETRY, S.A. DE C.V.  <option>
                 <option>TOYODA GOSEI AUTOMOTIVE SEALlNG MÉXICO, S.A. DE C.V</option>
                 <option>TRANSFORMADORA DE ALAMBRE POTOSINA, S. DE R.L</option>
                 <option>TRITURADOS DE VALLES, S.A. DE C.V. </option>
                 <option>TROPLAM INDUSTRIES, S. DE R.L. DE C.V.  </option>
                 <option>TUBESA, S.A. DE C.V.  </option>
                 <option>TUBOS Y LÁMINA, S.A. DE C.V.  </option>
                 <option>UNIFORMES CESARS, S.A. DE C.V.  </option>
                 <option>UNIÓN DE GANADEROS LECHEROS DE JUÁREZ, S.A. D<option>
                 <option>UNIVERSAL SILENCER DE MÉXICO, S. DE R.L. DE C.V</option>
                 <option>UNIVERSIDAD POTOSINA </option>
                 <option>UNIVERSIDAD TECNOLOGICA DE SAN LUIS POTOSI  <option>
                 <option>USG MÉXICO, S.A. DE C.V.  </option>
                 <option>VALSA CORTINAS Y PERSIANAS, S.A. DE C.V.  </option>
                 <option>VENECIA MUEBLES, S.A. DE C.V.  </option>
                 <option>VEYANCE PRODUCTOS INDUSTRIALES, S. DE R.L. </option>
                 <option>VIBROPREN, S.A. DE C.V. </option>
                 <option>VÍCTOR GERARDO MOINSIVAIS </option>
                 <option>VICTOR MANUEL SOTO ARAIZA </option>
                 <option>VILLA MANUFACTURAS, S.A. DE C.V.    </option>
                 <option>VIMAR INDUSTRIAL, S. DE R.L. DE C.V.  </option>
                 <option>VINÍCOLA DEL ALTIPLANO, S.A. DE C.V. </option>
                 <option>VIRGINIA PADILLA RODRIGUEZ  </option>
                 <option>VORGPAK, S.A. DE C.V. </option>
                 <option>WABTEC DE MÉXICO, S. DE R.L. DE C.V. </option>
                 <option>WORLD WIDE TOOL DEL CENTRO, S.A. DE C.V.  </option>
                 <option>XTRASTRETCH DE MÉXICO, S. DE R.L. DE C.V.  </option>
                 <option>YESOS DE SAN LUIS, S. DE R.L. DE C.V.    </option>
                 <option>YESOS ESPECIALIZADOS DE MÉXICO, S.A. </option>
                 <option>YOLANDA LARRAGA GONZÁLEZ </option>
                 <option>YOLANDA PRUNEDA CASTILLO  </option>
                 <option>ZOPPAS INDUSTRIES DE MÉXICO, S.A. DE C.V.   </option>
                 <option>ZURICH MUEBLES, S.A. DE C.V. </option>-->

          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 5px"><!--DIV row2-->
            <div class="col-3 colum2 -sm" style="text-align: left; background-color:rgb(26,50,86);" >
              <p>Direcci&oacuten:</p>
            </div>
            <div class="col-9 seleccionarEmpresa -sm" style="padding: 0px; left:40px">
              <select class="form-control" name="direccion" id="">
                @foreach($empresa as $emp)
                  <option value="{{$emp->direccion}}">{{$emp->direccion}}</option>
                @endforeach
              </select>
            </div>     
          </div><!--DIV row2-->
          
          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 5px"><!--DIV row3-->
            <div class="col-3 columRamo -sm" style="text-align: left; background-color:rgb(26,50,86)">
              <p>Giro de la Empresa:</p>
            </div>
            <div class="col-9 inputRamo -sm" style="left:34px; padding: 0px; left:40px">
              <select class="form-control" name="giro">
                <option>Seleccione una opci&oacuten</option>
                @foreach($empresa as $emp)
                   <option value="{{$emp->giro}}">{{$emp->giro}}</option>
                 @endforeach
              </select>
             </div>     
          </div><!--DIV row3-->

          <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 5px"><!--DIV row4-->
            <div class="col-3 columTel -sm" style="text-align: left; background-color:rgb(26,50,86)" >
              <p>Tel&eacutefono:</p>
            </div>
            <div class="col-9 inputTel -sm" style="padding: 0px; left:40px">
              <select class="form-control" name="telefonoEmpresa">
                <option>Seleccione una opci&oacuten</option>
                @foreach($empresa as $emp)
                   <option value="{{$emp->telefono}}">{{$emp->telefono}}</option>
                 @endforeach
              </select>
            </div>     
          </div><!--DIV row4-->

          <div class="row" style="width: 78%; margin-left:30px"><!--DIV row5-->
            <div class="col-6 inputTel  -sm" style="top:130px; left:20%; padding: 0px;" >
              <button data-toggle="modal" data-target="#altaEmpresa" class="btn btn-primary" style="position: relative;top: 4px;left: 45px">Proponer Empresa</button>
            </div>
            <div class="col-6 inputTel  -sm" style="top:130px; left:20%; padding: 0px;" >
              <button data-toggle="modal" data-target="#altaEmpresayDireccion" class="btn btn-primary" style="position: relative;top: 4px;left: 15px">Proponer Empresa y Dirección</button>
            </div>

          </div><!--DIV row5-->   
             <input class="btn btn-success botonEnviar" type="submit" value="Guardar Datos" style="margin-left: 350px; margin-top: 165px">          
        </div>  <!--DIV Empresa-->
     
    </form>

<!----------------------------------------------------------------------------------------------->
   <!----------------------------------DATOS ASESOR EXTERNO---------------------------------------->
   <!----------------------------------------------------------------------------------------------->
    <form method="POST" action="/GuardaDatosAsesorExterno/{{$alumno->claveUnica}}" style="width: 78%; position: relative; left: 122px">
        @csrf
        <div class="tituloDatosAsesor" style="background-color:rgb(26,50,86)">
          <p>Datos del asesor de la Empresa</p>
        </div><!--DIV TITULO DATOS ASESOR-->  
        <!--DIV que contiene los datos que se le piden al asesor-->
        <div class="Asesor" style="height: 360px">
            <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 0px"><!--DIV row1-->
              <div class="col-3 columNomAs -sm" style="text-align: left; background-color:rgb(26,50,86)">
                <p>Nombre:</p>
              </div>
              <div class="col-9 inputNomAs -sm" style="padding: 0px; left: 40px">
                <input type="text" class="form-control input-sm" name="nombreAsesor" required>
              </div>   
            </div><!--DIV row1-->
            <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row2-->
              <div class="col-3 columCargoAs -sm" style="text-align: left; background-color:rgb(26,50,86)" >
                <p>Cargo:</p>
              </div>
              <div class="col-9 inputCargoAs -sm" style="padding: 0px; left: 40px">
                <input type="text" class="form-control input-sm" name="cargo" required>
              </div>   
            </div><!--DIV row2-->
            <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row3-->
              <div class="col-3 columCargoAs -sm" style="text-align: left; background-color:rgb(26,50,86)" >
                <p>Tel&eacutefono: </p>
              </div>
              <div class="col-9 inputCargoAs -sm" style="padding: 0px; left: 40px">
                <input type="text" class="form-control input-sm" name="telefonoAsesor" required>
              </div>   
            </div><!--DIV row3-->
            <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row4-->
              <div class="col-3 columCargoAs -sm" style="text-align: left; background-color:rgb(26,50,86)" >
                <p>Tipo Asesor: </p>
              </div>
              <div class="col-9 columCargoAs -sm" style="padding: 0px; left: 40px">
                <select class="form-control" name="tipoAsesor" id="">
                  <option value="Externo">Externo</option>
                </select>
              </div>   
            </div><!--DIV row4-->
            <div class="row" style="width: 78%; margin-left:30px; margin-bottom: 10px"><!--DIV row5-->
              <div class="col-3 columCargoAs -sm" style="text-align: left; background-color:rgb(26,50,86);margin-top: 20px" >
                <p>Email: </p>
              </div>
              <div class="col-9 inputCargoAs -sm" style="padding: 0px; left: 40px;margin-top: 20px">
                <input type="text" class="form-control input-sm" name="emailAsesor" required>
              </div>   
            </div><!--DIV row5-->
             <input class="btn btn-success botonEnviar" type="submit" value="Guardar Datos" style="margin-left: 350px; margin-top: 85px">
        </div>  <!--DIV Asesor-->            
       
    </form>

      
  </div><!--container-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>