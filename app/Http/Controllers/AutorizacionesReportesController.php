<?php

namespace App\Http\Controllers;
use App\TutorAcademico;
use App\Alumno;
use App\Reportes;
use App\AutorizacionesReportes;
use Illuminate\Support\Carbon;
use App\Empresa;
use App\Asesor;
use App\Encargado;
use App\registroPracticas;
use Illuminate\Http\Request;

class AutorizacionesReportesController extends Controller
{
    public function AutorizacionesReportes($rpe, $claveUnica)
    {
        $tutor=TutorAcademico::where('rpe','=',$rpe)->first();
       
        $alumno=Alumno::where('claveUnica','=',$claveUnica)->first();
         $registroreporte=registroPracticas::where('claveUnica','=',$alumno->claveUnica)->first();

        $reportes=Reportes::where('idRegistroPracticas','=',$registroreporte->idRegistroPracticas)->first();
        
        $emp=Empresa::where('idEmpresa','=',$registroreporte->idEmpresa)->first();
        $asesor = Asesor::where('idAsesor','=',$registroreporte->idAsesor)->first();

        $fecha = Carbon::now()->formatLocalized('%A %d %B %Y');
        $fechaAut = Carbon::now();
        $fechaAut = $fechaAut->format('d-m-Y');
        //dd($rpe);
    	return view('autorizaReportesTutorAcademico')->with('tutor',$tutor)->with('registroreporte',$reportes)->with('alumno',$alumno)->with('fecha',$fecha)->with('emp',$emp)->with('ase',$asesor)->with('fechaAut',$fechaAut);        
    } 
    public function AutorizacionesReportesEncargado($rpe, $claveUnica)
    {
        $encargado=Encargado::where('rpe','=',$rpe)->first();

        $alumno=Alumno::where('claveUnica','=',$claveUnica)->first();
        $tutor=TutorAcademico::where('id','=',$alumno->idTutorAcademico)->first();
         $registroreporte=registroPracticas::where('claveUnica','=',$alumno->claveUnica)->first();
        $reportes=Reportes::where('idRegistroPracticas','=',$registroreporte->idRegistroPracticas)->first();
        $emp=Empresa::where('idEmpresa','=',$registroreporte->idEmpresa)->first();
        $asesor = Asesor::where('idAsesor','=',$registroreporte->idAsesor)->first();

        $fecha = Carbon::now()->formatLocalized('%A %d %B %Y');
        $fechaAut = Carbon::now();
        $fechaAut = $fechaAut->format('d-m-Y');
        //dd($rpe);
        return view('autorizaReportesEncargado')->with('encargado',$encargado)->with('registroreporte',$reportes)->with('alumno',$alumno)->with('fecha',$fecha)->with('emp',$emp)->with('ase',$asesor)->with('fechaAut',$fechaAut)->with('tutor',$tutor);        
    } 

    public function GuardaAcreditacionReportesTutor($rpe,$claveUnica)
    {
        $tutor = TutorAcademico::where('rpe','=',$rpe)->first();        

        $alumno=Alumno::where('claveUnica','=',$claveUnica)->first();
        $registroreporte=registroPracticas::where('claveUnica','=',$alumno->claveUnica)->first();
        $reportes=Reportes::where('idRegistroPracticas','=',$registroreporte->idRegistroPracticas)->first();        

        $comentariotutor = request("Comentarios");

        $fecha = Carbon::now();
        $fechaAutorizacion = $fecha;

        $status = request("radio");
        
        
        $autorizatutor = new AutorizacionesReportes();//objeto para meter los valores al objeto
//        dd($sol);
        $autorizatutor->idRegistroPracticas = $reportes->idRegistroPracticas;
        $autorizatutor->idReporte = $reportes->idReporte;
        $autorizatutor->rpeTutorAcademico = $tutor->rpe;
        $autorizatutor->comentariosTutorAcademico = $comentariotutor;
        $autorizatutor->fechaAutorizacionTutorAcademico= $fechaAutorizacion;
        $autorizatutor->statusTutorAcademico = $status;

        if($autorizatutor->statusTutorAcademico == '0')
        {
          $autorizatutor->statusTutorAcademico = 0;
//          $autorizatutor->update(['false' => $autorizatutor->statusTutorAcademico]);
        }

        if($autorizatutor->statusTutorAcademico == '1')
        {
          $autorizatutor->statusTutorAcademico = 1;
  //        $autorizatutor->update(['true' => $autorizatutor->statusTutorAcademico]);
        }
     //   dd($autorizatutor);

        //dd($autorizatutor);
    	$autorizatutor->save();//para guardar en la base de datos

    	return redirect('tutorAcademicoReportesPendientes/'.$rpe);//para regresar a la pagina principal
    }

    public function GuardaAcreditacionReportesEncargado($rpe,$claveUnica)
    {
        $encargado=Encargado::where('rpe','=',$rpe)->first();
        $alumno=Alumno::where('claveUnica','=',$claveUnica)->first();

        $comentarioEncargado = request("Comentarios");

        $fecha = Carbon::now();
        $fechaAutorizacion = $fecha;

        $status = request("radio");


        $registropracticas=registroPracticas::where('claveUnica','=',$alumno->claveUnica)->first();
        // dd($registropracticas);
        $reportes=Reportes::where('idRegistroPracticas','=',$registropracticas->idRegistroPracticas)->first();
        $autorizaciones=AutorizacionesReportes::where('idReporte','=',$reportes->idReporte)->first();
        // dd($autorizaciones);

        $autorizaciones->idReporte = $autorizaciones->idReporte;
        // dd($autorizaciones->idAutorizacionReportes);
        $autorizaciones->rpeEncargado = $encargado->rpe;
        $autorizaciones->comentariosEncargado = $comentarioEncargado;
        $autorizaciones->fechaAutorizacionEncargado= $fechaAutorizacion;
        $autorizaciones->statusEncargado = $status;

        if($autorizaciones->statusEncargado == '0')
        {
          $autorizaciones->statusEncargado = 0;
//          $autorizatutor->update(['false' => $autorizatutor->statusTutorAcademico]);
        }

        if($autorizaciones->statusEncargado == '1')
        {
          $autorizaciones->statusEncargado = 1;
  //        $autorizatutor->update(['true' => $autorizatutor->statusTutorAcademico]);
        }
		// dd($autorizaciones);

    	$autorizaciones->save();//para guardar en la base de datos

        if($autorizaciones->statusEncargado == '1' && $autorizaciones->statusTutorAcademico == '1')
        {
          $reportes->statusReporte = 'Aprobado';
  //        $autorizatutor->update(['true' => $autorizatutor->statusTutorAcademico]);
        }
        if($autorizaciones->statusEncargado == '1' && $autorizaciones->statusTutorAcademico == '0')
        {
          $reportes->statusReporte = 'No Aprobado';
  //        $autorizatutor->update(['true' => $autorizatutor->statusTutorAcademico]);
        }
        if($autorizaciones->statusEncargado == '0' && $autorizaciones->statusTutorAcademico == '0')
        {
          $reportes->statusReporte = 'No Aprobado';
  //        $autorizatutor->update(['true' => $autorizatutor->statusTutorAcademico]);
        }
        if($autorizaciones->statusEncargado == '0' && $autorizaciones->statusTutorAcademico == '0')
        {
          $reportes->statusReporte = 'No Aprobado';
  //        $autorizatutor->update(['true' => $autorizatutor->statusTutorAcademico]);
        }
        $reportes->save();


    	return redirect('encargadoReportesPendientes/'.$rpe);//para regresar a la pagina principal
    }
}
