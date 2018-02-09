<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FechasController extends Controller
{

  public function comprobarFechas($fecha1, $fecha2, $fecha3, $fecha4){
     if ($fecha1 < $fecha2) {
       $mensaje = "paso";
     }else {
       $mensaje = "No paso";
     }
      return $mensaje;
  }

}
