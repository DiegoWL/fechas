<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FechasController;
class IndexController extends Controller
{

    public function index(){

    return view('welcome');

    }

    public function postFechas(Request $request){

      $fechas = new FechasController();
      $fecha1 = $request->fecha1;
      $fecha2 = $request->fecha2;
      $fecha3 = $request->fecha3;
      $fecha4 = $request->fecha4;
      $mensaje = $fechas->comprobarFechas($fecha1,$fecha2,$fecha3,$fecha4);

      return $mensaje;

    }


}
