<?php
namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Alumno;
use App\registroPracticas;
use App\TutorAcademico;
use App\Reportes;
use App\Empresa;
use File; 


class ReportesController extends Controller
{
   public function Reportes($clave)
    {
        $alumno=Alumno::where('claveUnica','=',$clave)->first();
        $tutor=TutorAcademico::where('id','=',$alumno->idTutorAcademico)->first();
        //dd($asesor);
        $solicitud=registroPracticas::where('claveUnica','=',$alumno->claveUnica)->first();
        $reportes = Reportes::where('idRegistroPracticas','=',$solicitud->idRegistroPracticas)->first();
        $fecha = Carbon::now()->formatLocalized('%A %d %B %Y');

        // $alumno=registroAlumno::find($claveUnicaUnica);
        //dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
        return view('Reportes')->with('alumno',$alumno)->with('fecha',$fecha)->with('tutor',$tutor)->with('reportes',$reportes)->with('solicitud',$solicitud);
    }

    public function GuardaDatosReportes($clave, Request $request)
    {
        $alumno=Alumno::where('claveUnica','=',$clave)->first();
        $tutor=TutorAcademico::where('id','=',$alumno->idTutorAcademico)->first();
        $registroreporte=registroPracticas::where('claveUnica','=',$alumno->claveUnica)->first();
        $reportes=Reportes::where('idRegistroPracticas','=',$registroreporte->idRegistroPracticas)->first();
       
       
        $numeroReporte = request('numReporte');
        $fechaInicio = request('fechaInicio');
        $fechaFin = request('fechaFin');
        $actividades = request('acts');
        $nombreArchivo = request('nomArchivo');
        $fecha = Carbon::now()->format('Y-m-d');

        $sP = new Reportes();//objeto para meter los valores al objeto

        $sP->idRegistroPracticas = $registroreporte->idRegistroPracticas;
        $sP->numReporte = $numeroReporte;
        $sP->fechaInicio = $fechaInicio;
        $sP->fechaFin = $fechaFin;
        $sP->actividad = $actividades;

        $path= storage_path('app/public');
        $path=$path."/".$clave;
        if(!File::exists($path)) { File::makeDirectory($path); }
        //obteniendo los archivos
        $files = $request->file('nomArchivo');
        $ext = pathinfo($files->getClientOriginalName(), PATHINFO_EXTENSION);
        $name="Reporte".$numeroReporte.".".$ext;

        $files->move($path,$name);
        $nombreArchivo=$path."/".$name;
        $sP->nombreArchivo = $nombreArchivo;
        $sP->fechaArchivo = $fecha;

        if($sP->guardaDatosReporte == false)
        {
          $sP->guardaDatosReporte = true;
        }
        
        $sP->statusReporte = 'En Proceso';
        $sP->save();

        return redirect('menuAlumno/'.$clave);
    }

    public function save(Request $request)
    {
       /**** GUADRAR LOS ARCHIVOS EN SU RESPECTIVA CARPETA  **/
    /*   dd('hola2');
        
        $count=0;
                    foreach ($files as $f ) {
                    $name=date("Ymdhis");
                    $name=$name.$count;
                    $count++;
                   
                    $name=$name.".".$ext;
                    $f->move($path,$name);
                    $d=new DetallePx();
                    $d->idPx=$idPx;
                    $d->route=$px->clave;
                    $d->nomArchivo=$name;
                   // $d->notas=$request->notas;   
                    $d->save(); 
        } */
        
/***FIN GUADRAR LOS ARCHIVOS EN SU RESPECTIVA CARPETA******/

       //obtenemos el campo file definido en el formulario
       // dd('hola2');
       $file = $request->file('nomArchivo');
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
 
       return "archivo guardado";


    }
}



