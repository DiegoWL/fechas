$(document).ready(function() {
    var fecha1 , fecha2 , fecha3 , fecha4, form;

    $('#alerta').hide();
    $( "#datepicker1 , #datepicker2 , #datepicker3 , #datepicker4" ).datepicker({
      dateFormat:"dd-mm-yy"
    });

    $('#comprobar').click(function(event) {
          fecha1 =   $( "#datepicker1 " ).datepicker('getDate');
          fecha2 =   $( "#datepicker2 " ).datepicker('getDate');
          fecha3 =   $( "#datepicker3 " ).datepicker('getDate');
          fecha4 =   $( "#datepicker4 " ).datepicker('getDate');
          form = $('#form_fechas').serializeArray();
          //  console.log(form);
          $.ajax({
            url: '/fechas',
            type: 'POST',
            data: form
          })
          .done(function(data) {
            console.log(data)
            if(data == 0){
              $('#fila').empty();
              $('#fila').append("<div class='alert alert-success'><i class='far fa-check-circle'></i> Fechas validadas correctamente </div>");
            }
           else if(data == 1) {
              $('#fila').empty();
              $('#fila').append("<div class='alert alert-danger'><i class='fas fa-times'></i> Fechas Invalidas, verificar. </div>");
            }
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
          });

    });

    $('#calcular').click(function(event) {
      /* Act on the event */
      console.log('funciona');
        let form = $('#form_fechas').serializeArray();
    //    console.log(form);
      $.ajax({
        url: '/calcular',
        type: 'POST',
        data: form
      })
      .done(function(data) {
        console.log(data);
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });

    });

});
