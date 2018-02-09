$(document).ready(function() {
    var fecha1 , fecha2 , fecha3 , fecha4, form;

    $( "#datepicker1 , #datepicker2 , #datepicker3 , #datepicker4" ).datepicker({
      dateFormat:"dd-mm-yy"
    });
    $('#comprobar').click(function(event) {
      fecha1 =   $( "#datepicker1 " ).datepicker('getDate');
      fecha2 =   $( "#datepicker2 " ).datepicker('getDate');
      fecha3 =   $( "#datepicker3 " ).datepicker('getDate');
      fecha4 =   $( "#datepicker4 " ).datepicker('getDate');
      form = $('#form_fechas').serializeArray();
      console.log(form);
      $.ajax({
        url: '/fechas',
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
