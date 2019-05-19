<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\TutorAcademico;
use App\registroPracticas;
use App\Empresa;

use Illuminate\Support\Carbon;

class datosEmpresaController extends Controller
{
    public function submenuDatosEmpresa($clave)
    {
        $empresa= Empresa::all();
    	$alumno=Alumno::where('claveUnica','=',$clave)->first();
    	$tutor=TutorAcademico::where('id','=',$alumno->idTutorAcademico)->first();
        $fecha = Carbon::now()->formatLocalized('%A %d %B %Y');

        return view('datosEmpresa')->with('alumno',$alumno)->with('fecha',$fecha)->with('tutor',$tutor)->with('empresa',$empresa);
	}

    public function GuardaDatosEmpresa($clave)
    {
        $nombreEmpresa = request('idEmpresa');
        $direccion = request('direccion');
        $giro = request('giro');
        $telefonoEmpresa = request('telefonoEmpresa');

        $emp = Empresa::find($nombreEmpresa);
        
        $sP=registroPracticas::where('claveUnica','=',$clave)->first();

         $sP->idEmpresa =$emp->nombreEmpresa;
// $emp->idEmpresa =
        if($sP->guardaDatosEmpridEmpresa)
        {
          $sP->guardaDatosEmpresa = true;
          $sP->update(['true' => $sP->guardaDatosEmpresa]);
        }

        $sP->save();

        return redirect('datosAsesor/'.$clave);
    }

    public function GuardaDatosEmpresaModal($clave)
    {

        $sP=registroPracticas::where('claveUnica','=',$clave)->first();

        $nombreEmpresa = request('nombreEmpresa');
        $direccion = request('direccionE');
        $giro = request('giroE');
        $telefonoEmpresa = request('telefonoE');

        $emp = new Empresa();

        $emp->Nombre=$nombreEmpresa;
        $emp->Direccion = $direccion;
        $emp->Giro = $giro;
        $emp->Telefono=$telefonoEmpresa;
        $emp->save();

        $sP->idEmpresa = $emp->idEmpresa;
        
        if($sP->guardaDatosEmpresa == false)
        {
          $sP->guardaDatosEmpresa = true;
        }

        $sP->save();

        return redirect('/datosAsesor/'.$clave);
    }

    public function GuardaEmpresaDireccionModal($clave)
    {
        $nombreEmpresa = request('idEmpresa');
        $direccion = request('direccion');
        $giro = request('giro');
        $telefonoEmpresa = request('telefono');

        $emp = Empresa::find($nombreEmpresa);

        $emp->Nombre=$emp->Nombre;
        $emp->Direccion = $direccion;
        $emp->Giro = $giro;
        $emp->Telefono=$telefonoEmpresa;
        $emp->save();

        $sP=registroPracticas::where('claveUnica','=',$clave)->first();
        

        $sP->idEmpresa = $emp->idEmpresa;
        
        
        if($sP->guardaDatosEmpresa == false)
        {
          $sP->guardaDatosEmpresa = true;
          $sP->update(['true' => $sP->guardaDatosEmpresa]);
        }

        $sP->save();

        return redirect('/datosAsesor/'.$clave);
    }
}
