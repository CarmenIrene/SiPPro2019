<?php

namespace App\Http\Controllers;
use App\AutorizacionesEmpresasPendientesEncargado;
use Illuminate\Http\Request;
use App\Encargado;
use App\Alumno;
use App\Empresa;
use App\registroPracticas;
use Illuminate\Support\Carbon;

use Illuminate\Http\Request;

class AutorizacionesEmpresasPendientesEncargadoController extends Controller
{
    public function EncargadoEmpresasPendientes($rpe)
    {
     	$encargado=Encargado::where('rpe','=',$rpe)->first(); // va el nombre del controlador
        $solicitudempresa = registroPracticas::with('Alumno')->get();

        $fecha = Carbon::now()->formatLocalized('%A %d %B %Y');
        //return json_encode($solicitud);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('encargadoEmpresasPendientes')->with('encargado',$encargado)->with('solicitud',$solicitudempresa)->with('fecha',$fecha); 
    }
 	 public function GuardaAcreditacionEmpresaEncargado($rpe,$claveUnica)
    {
        $encargado = Encargado::where('rpe','=',$rpe)->first();        

        $alumno=Alumno::where('claveUnica','=',$claveUnica)->first();        
        $sol=registroPracticas::where('claveUnica','=',$alumno->claveUnica)->first();

        $comentariotutor = request("Comentarios");
        $fechaAutorizacion = request("fechaAutorizacion");
        $statusEncargado = request("radio");
        
        $autorizaencargado = new AutorizacionEmpresa();//objeto para meter los valores al objeto

        $autorizaencargado->claveUnica = $sol->claveUnica;
        $autorizaencargado->rpe = $encargado->rpe;
        $autorizaencargado->comentariosEncargado = $comentariotutor;
        $autorizaencargado->fechaAutorizacionEncargado= $fechaAutorizacion;
        $autorizaencargado->statusEncargado = $status;

        if($autorizaencargado->statusEncargado == '0')
        {
          $autorizaencargado->statusEncargado = 0;
//          $autorizatutor->update(['false' => $autorizatutor->statusTutorAcademico]);
        }

        if($autorizaencargado->statusEncargado == '1')
        {
          $autorizaencargado->statusEncargado = 1;
  //        $autorizatutor->update(['true' => $autorizatutor->statusTutorAcademico]);
        }

        //dd($autorizatutor);
    	$autorizaencargado->save();//para guardar en la base de datos

    	return redirect('/menuEncargado'.$rpe);//para regresar a la pagina principal
    }

  
}
