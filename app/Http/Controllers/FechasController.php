<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FechasController extends Controller
{

  public function comprobarFechas($fecha1, $fecha2,$fecha3,$fecha4){

     if ($fecha2 > $fecha1 && $fecha3 > $fecha2 && $fecha4 > $fecha3 ) {
       $mensaje = 0;
     }else {
       $mensaje = 1;
     }
      return $mensaje;
  }

  public function calcularFechas($fecha , $n){

      $fecha = Carbon::parse($fecha);
      $nueva_fecha =  $fecha->addDays($n); //metodo que suma numeros a la fecha.

      if ($nueva_fecha->isWeekend() == true) { //comprueba la nueva fecha es Fin de semana.
        $nueva_fecha = $nueva_fecha->addDays(2); //suma dos dias, para que sea dia habil.
      }
      
      return $nueva_fecha;
  }

}
