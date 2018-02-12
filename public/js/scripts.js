function calcularFecha(valor , fecha){
      $.ajax({
        url: '/calcular',
        type: 'POST',
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        data: {valor,fecha}
      })
      .done(function(data) {
        $('#modal-content').empty();
        $('#modal-content').append(data.view);
        $('#modal').modal();
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
}

function validacion(){

  $('#fila').empty();
  $('#fila').append(
    "<div class='col-md-7'>"+
      "<div class='alert alert-danger'><i class='fas fa-times'></i> Campo vacio  </div>"+
    "</div>");
}

$(document).ready(function() {
    var form;
    $('#alerta').hide();
    $( "#datepicker1 , #datepicker2 , #datepicker3 , #datepicker4" ).datepicker({
      dateFormat:"dd-mm-yy"
    });

    $('#comprobar').click(function(event) {
         if ($( ".date" ).val().length <= 0) { // validar cada campo
            $('#fila').empty();
            $('#fila').append(
              "<div class='col-md-7'>"+
                "<div class='alert alert-danger'><i class='fas fa-times'></i> Campos de fechas vacios. Comprobar que ha ingresado todas los campos.  </div>"+
              "</div>");
          }else {
            form = $('#form_fechas').serializeArray();
            $.ajax({
              url: '/fechas',
              type: 'POST',
              data: form
            })
            .done(function(data) {
              console.log(data)
              if(data == 0){
                $('#fila').empty();
                $("#calcular1 , #calcular2 , #calcular3 , #calcular4").removeAttr("disabled");
                $('#fila').append("<div class='alert alert-success'><i class='far fa-check-circle'></i> Fechas validadas correctamente </div>");
              }
             else if(data == 1) {
                $('#fila').empty();
                $('#fila').append("<div class='alert alert-danger'><i class='fas fa-times'></i> Fechas Invalidas, verificar si cada fecha es mayor a la anterior.</div>");
                $("#calcular1 , #calcular2 , #calcular3 , #calcular4").attr("disabled", true);
              }
            })
            .fail(function() {
              console.log("error");
            })
            .always(function() {
              console.log("complete");
            });
           }

    });


    $('#calcular1').click(function(event) {
        event.preventDefault();
        var fecha1 = $("#datepicker1").val();
        var valor1 = $('#valor1').val();
        if (valor1.length <= 0) {
            validacion();
        }else{
            $('#fila').empty();
            calcularFecha(valor1,fecha1);
        }
    });

    $('#calcular2').click(function(event) {
        event.preventDefault();
        var fecha2 =   $( "#datepicker2 " ).val();
        var valor2 = $('#valor2').val();
        if (valor2.length <= 0) {
            validacion();
        }else{
            $('#fila').empty();
            calcularFecha(valor2 , fecha2);
        }

    });

    $('#calcular3').click(function(event) {
        event.preventDefault();
        var fecha3 = $( "#datepicker3").val();
        var valor3 = $('#valor3').val();
        if (valor3.length <= 0) {
            validacion();
        }else{
            $('#fila').empty();
            calcularFecha(valor3 , fecha3);
        }


    });

    $('#calcular4').click(function(event) {
        event.preventDefault();
        var fecha4 = $( "#datepicker4").val();
        var valor4 = $('#valor4').val();
        if (valor4.length <= 0) {
            validacion();
        }else{
            $('#fila').empty();
            calcularFecha(valor4,fecha4);
        }

    });

});
