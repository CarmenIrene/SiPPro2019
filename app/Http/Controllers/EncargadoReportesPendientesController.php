<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\EncargadoReportesPendientes;//aqui va el nombre del modelo
use App\Encargado;

use App\Alumno;
use App\Reportes;
use App\registroPracticas;
use Illuminate\Support\Carbon;



class EncargadoReportesPendientesController extends Controller
{
    public function EncargadoReportesPendientes($rpe){
     	$encargado=Encargado::where('rpe','=',$rpe)->first(); // va el nombre del controlador
        $reportesEncargado = registroPracticas::with('Alumno')->get();


        //dd($solicitud);
/*        $programas = regis::with(array('progNombres' => function($query)
        {
            $query->where('ultimo', '=', 1);// validacion para traer solo el nombre que esta marcado como ultimo
        }))->where('id_prog_estatus', '=', '1')->where('id_programa','=','53')->get();*/

        $fecha = Carbon::now()->formatLocalized('%A %d %B %Y');
        //return json_encode($solicitud);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('encargadoReportesPendientes')->with('encargado',$encargado)->with('reportesEncargado',$reportesEncargado)->with('fecha',$fecha); 
    }
    public function Elimina($idReporte) //no se necesita poner el tipo del dato
    {
        $s= EncargadoReportesPendientes::find($idReporte);
        $s->delete();

        return redirect('EncargadoReportesPendientes/'.$idReporte);//para regresar a la pagina principal
    }
}
