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

    public function calcular(Request $request){

        $fechas = new FechasController();
      $n = $request->valor;
      $f = $request->fecha;
      // $fecha1 = $request->fecha1;
      // $fecha2 = $request->fecha2;
      // $fecha3 = $request->fecha3;
      // $fecha4 = $request->fecha4;
      // $n1 = $request->valor1;
      // $n2 = $request->valor2;
      // $n3 = $request->valor3;
      // $n4 = $request->valor4;
      $nueva_f = $fechas->calcularFechas($f , $n);

      return  response()->json([
        'view'=>view('modal' ,
        ['nueva_f'=>$nueva_f , 'n' => $n , 'f' => $f])->render()
      ]);



    }


}
