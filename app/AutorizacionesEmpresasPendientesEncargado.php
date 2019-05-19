<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutorizacionesEmpresasPendientesEncargado extends Model
{
   	protected $primaryKey = 'idAutorizacionEmpresa'; 
	protected $fillable = [
       		 'idRegistroPracticas','rpeEncargado', 'fechaAutorizacionEncargado','comentariosEncargado','statusEncargado' 
       		];
}
 