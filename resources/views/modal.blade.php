
<div class="modal-header">
  <h5 class="modal-title">Nueva Fecha</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <p> Fecha Ingresada: {{ $f }} </p>
  <p> Número Ingresado: {{ $n }} </p>
  <p> Fecha Calculada: {{ $nueva_f->format('d-m-Y') }} </p>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
</div>
