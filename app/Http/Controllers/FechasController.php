<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FechasController extends Controller
{

  public function comprobarFechas($fecha1, $fecha2,$fecha3,$fecha4){
     if ($fecha2 > $fecha1 && $fecha3 > $fecha2 && $fecha4 > $fecha3 ) {
       $mensaje = "paso";
     }else {
       $mensaje = "No paso";
     }
      return $mensaje;
  }

}
