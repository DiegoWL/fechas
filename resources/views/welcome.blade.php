<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <main role="main" class="container" method="post">
          <h1 class="mt-5">Fechas</h1>
          <hr>
        <form id="form_fechas" action="{{route('fechas.post')}}">
                {!! csrf_field() !!}
          <div class="form-group row">
            <div class="col-4">
              <input type="text" name="fecha1"  id="datepicker1" class="form-control">
            </div>
            <div class="col-4">
              <input type="text"  name="valor1" class="form-control" value="0" placeholder="Last name">
            </div>
          </div>
          <div class="form-group row">
              <div class="col-4">
                <input type="text" name="fecha2"  id="datepicker2"  class="form-control">
              </div>
              <div class="col-4">
                <input type="text" name="valor2" class="form-control" value="0" placeholder="Last name">
              </div>
          </div>
          <div class="form-group row">
            <div class="col-4">
              <input type="text" name="fecha3"  id="datepicker3" class="form-control">
            </div>
            <div class="col-4">
              <input type="text"  name="valor3" class="form-control" value="0" placeholder="Last name">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-4">
              <input type="text" name="fecha4"  id="datepicker4" class="form-control">
            </div>
            <div class="col-4">
              <input type="text" name="valor4" class="form-control" value="0" placeholder="Last name">
            </div>
          </div>

        </form>
        <button  class="btn btn-primary" id="comprobar">Comprobar</button>
        <button  class="btn btn-info" id="calcular">Calcular Fechas</button>
          <div class="row mt-5" id="fila" >

          </div>

        </main>




    </body>
    <script src="/components/jquery/dist/jquery.min.js"></script>
    <script src="/components/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>
    <script type="text/javascript" src="/components/font-awesome/svg-with-js/js/fontawesome-all.js"></script>
</html>
