<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuAlumno;
use App\Alumno;
use App\TutorAcademico;
use App\registroPracticas;

use Illuminate\Support\Carbon;

class menuAlumnoController extends Controller
{
    public function menuAlumno($clave)
    {
    	$alumno=Alumno::where('claveUnica','=',$clave)->first();
    	$tutor=TutorAcademico::where('id','=',$alumno->idTutorAcademico)->first();
    	//dd($asesor);
        $solicitud = registroPracticas::where('claveUnica','=',$alumno->claveUnica)->first();
        // dd($solicitud);
        //dd($solicitud);
        $fecha = Carbon::now()->formatLocalized('%A %d %B %Y');

    	// $alumno=registroAlumno::find($claveUnicaUnica);
    	//dd($v); //dd es para hacer pruebas de que si este entrando a la funcion
    	return view('menuAlumno')->with('alumno',$alumno)->with('fecha',$fecha)->with('tutor',$tutor)->with('solicitud',$solicitud);
	}
}
