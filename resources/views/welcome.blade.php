<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/components/jquery-ui/themes/base/jquery-ui.min.css" rel="stylesheet" type="text/css">
          <link href="/components/font-awesome/web-fonts-with-css/css/fontawesome.min.css" rel="stylesheet" type="text/css">
        <!-- Styles -->


    </head>
    <body>
      <!-- Begin page content -->

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Instrucciones Calculo de fechas </h1>
          <ul>
            <li> Validar que cada fecha sea mayor al anterior.</li>
            <li>Una vez valiada las fechas, se desbloquearan los botones para realizar el calculo.</li>
            <li>Ingresar un número y apretar el boton calcular</li>
            <li>Se desplegará una ventana con el resultado</li>
           </ul>
        </div>
      </div>

            <hr>
        <main role="main" class="container" method="post">

        <form id="form_fechas" action="{{route('fechas.calcular')}}">
                {!! csrf_field() !!}
          <div class="form-group row">
            <div class="col-3">
            <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-calendar-alt fa-lg"></i></div>
               </div>
              <input type="text" name="fecha1"  id="datepicker1" class="form-control " placeholder="Fecha 1" aria-label="Input group example" aria-describedby="btnGroupAddon">
            </div>

            </div>
            <div class="col-3">
              <input type="text" id="valor1"  name="valor1" class="form-control"  placeholder="Ingrese numero" >
            </div>
            <div class="col-3">
              <button  class="btn btn-info btn-sm" id="calcular1" disabled>Calcular Fechas</button>
            </div>
          </div>
          <div class="form-group row">
              <div class="col-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-calendar-alt fa-lg"></i></div>
                   </div>
                  <input type="text" name="fecha2"  id="datepicker2" class="form-control " placeholder="Fecha 2" aria-label="Input group example" aria-describedby="btnGroupAddon">
                </div>
              </div>
              <div class="col-3">
                <input type="text" id="valor2"  name="valor2" class="form-control "  placeholder="Ingrese numero">
              </div>
              <div class="col-3">
                <button  class="btn btn-info btn-sm " id="calcular2" disabled>Calcular Fechas</button>
              </div>
          </div>
          <div class="form-group row">
            <div class="col-3">
              <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-calendar-alt fa-lg"></i></div>
                 </div>
                <input type="text" name="fecha3"  id="datepicker3" class="form-control date" placeholder="Fecha 3">
              </div>
            </div>
            <div class="col-3">
              <input type="text" id="valor3" name="valor3" class="form-control"   placeholder="Ingrese numero">
            </div>
            <div class="col-3">
              <button  class="btn btn-info btn-sm" id="calcular3" disabled>Calcular Fechas</button>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-calendar-alt fa-lg"></i></div>
                 </div>
                 <input type="text" name="fecha4"  id="datepicker4" class="form-control" placeholder="Fecha 4">
              </div>
            </div>
            <div class="col-3">
              <input type="text" id="valor4" name="valor4" class="form-control"   placeholder="Ingrese numero">
            </div>
            <div class="col-3">
              <button  class="btn btn-info btn-sm" id="calcular4" disabled>Calcular Fechas</button>
            </div>
          </div>

        </form>
          <button  class="btn btn-primary" id="comprobar">Comprobar</button>
      {{-- <button  class="btn btn-info" id="calcular">Calcular Fechas</button> --}}
          <div class="row mt-2" id="fila" >

          </div>


        <div id="modal" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm">
            <div id="modal-content" class="modal-content">

            </div>
          </div>
        </div>

        </main>




    </body>
    <script src="/components/jquery/dist/jquery.min.js"></script>
    <script src="/components/jquery-ui/jquery-ui.min.js"></script>
    <script src="/components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>
    <script type="text/javascript" src="/components/font-awesome/svg-with-js/js/fontawesome-all.js"></script>
</html>
